<?php

/**
 * The goal of this optional exercise is to design and implement a simple inventory control system
 * for a small video rental store. Define least two classes:
 * a class Video to model a video and a class VideoStore to model the actual store.
 *
 * Assume that a Video may have the following state:
 *
 * A title;
 * a flag to say whether it is checked out or not; and
 * an average user rating.
 *
 * In addition, Video has the following behaviour:
 *
 * being checked out;
 * being returned;
 * receiving a rating.
 *
 * The VideoStore may have the state of videos in there currently.
 * The VideoStore will have the following behaviour:
 *
 * add a new video (by title) to the inventory;
 * check out a video (by title);
 * return a video to the store;
 * take a user's rating for a video;
 * list the whole inventory of videos in the store.
 *
 * Finally, create a VideoStoreTest which will test the functionality of your other two classes.
 * It should allow the following:
 *
 * Add 3 videos: "The Matrix", "Godfather II", "Star Wars Episode IV: A New Hope".
 * Give several ratings to each video.
 * Rent each video out once and return it.
 * List the inventory after "Godfather II" has been rented out out.
 *
 * Summary of design specs:
 *
 * Store a library of videos identified by title.
 * Allow a video to indicate whether it is currently rented out.
 * Allow users to rate a video and display the percentage of users that liked the video.
 * Print the store's inventory, listing for each video:
 * its title,
 * the average rating,
 * and whether it is checked out or on the shelves.
 */

class Application
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
    }

    public function run(): void
    {
        while (true) {
//          Prints movies available
            $availableMovies = array_filter($this->videoStore->getInventory(), function ($movie) {
                return !$movie->isCheckedOut();
            });
            echo "Movies available: " . (count($availableMovies) > 0 ?
                    implode(', ', array_map(function ($movie) {
                        return $movie->getTitle();
                    }, $availableMovies)) : "0") . PHP_EOL;

//          Choose action
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            echo "Choose 5 to receive rating\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rent();
                    break;
                case 3:
                    $this->return();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                case 5:
                    $this->receiveRating();
                    break;
                default:
                    echo "Sorry, I don't understand you..\n";
            }
        }
    }

    private function addMovies(): void
    {
        $title = readline("Enter the title of the video: ");
        $this->videoStore->addVideo($title);
        echo "Video added.\n";
    }

    private function rent(): void
    {
        $title = readline("Enter the title of the video to rent: ");
        $video = $this->videoStore->getVideo($title);
        if ($video != null) {
            if ($video->isCheckedOut()) {
                echo "Video is already checked out.\n";
            } else {
                $video->checkedOut();
                echo "Video rented.\n";
            }
        } else {
            echo "Video not found.\n";
        }
    }

    private function return(): void
    {
        $title = readline("Enter the video to return: ");
        $video = $this->videoStore->getVideo($title);
        if ($video != null) {
            if ($video->isCheckedOut()) {
                $video->returned();
                echo "Video returned successfully.\n";
            } else {
                echo "Video is not checked out.\n";
            }
        } else {
            echo "Video not found.\n";
        }
    }

    private function listInventory(): void
    {
        $videos = $this->videoStore->getInventory();
        echo "Video Inventory:\n";
        foreach ($videos as $video) {
            echo "Title: " . $video->getTitle() . "\n";
            echo "Average Rating: " . $video->getAverageRating() . "\n";
            echo "Checked Out: " . ($video->isCheckedOut() ? "Yes" : "No") . "\n";
        }
    }

    private function receiveRating(): void
    {
        $title = readline("Enter the title of the video to receive rating: ");
        $video = $this->videoStore->getVideo($title);
        if ($video != null) {
            $rating = readline("Enter the rating for the video (1-5): ");
            if ($rating >= 1 && $rating <= 5) {
                $video->receiveRating($rating);
                echo "Rating received successfully.\n";
            } else {
                echo "Invalid rating. Please enter a number between 1 and 5.\n";
            }
        } else {
            echo "Video not found.\n";
        }
    }
}

class VideoStore
{
    public array $videos;


    public function __construct()
    {
        $this->videos = array();
    }

    public function addVideo(string $title): void
    {
        $video = new Video($title);
        $this->videos[] = $video;
    }

    public function getVideo(string $title): ?Video
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() == $title) {
                return $video;
            }
        }
        return null;
    }

    public function getInventory(): array
    {
        return $this->videos;
    }
}

class Video
{
    private string $title;
    private bool $checkedOut;
    private float $averageRating;
    private int $totalRatings;
    private int $numRatings;


    public function __construct(string $title)
    {
        $this->title = $title;
        $this->checkedOut = false;
        $this->averageRating = 0;
        $this->totalRatings = 0;
        $this->numRatings = 0;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isCheckedOut(): bool
    {
        return $this->checkedOut;
    }

    public function checkedOut(): void
    {
        $this->checkedOut = true;
    }

    public function returned(): void
    {
        $this->checkedOut = false;
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
    }

    public function receiveRating($rating)
    {
        if ($rating >= 1 && $rating <= 5) {
            $this->totalRatings += $rating;
            $this->numRatings++;
            $this->averageRating = $this->totalRatings / $this->numRatings;
        } else {
            echo "Invalid rating. Please enter a number between 1 and 5.\n";
        }
    }
}

$app = new Application();
$app->run();