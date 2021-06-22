<?php
// For Display Anything Start
interface FileInterface
{
    function display();
}
class FileDisplay
{
    function display(FileInterface $file)
    {
        $file->display();
    }
}
// For Display Anything End
class ImageFile implements FileInterface
{
    function display()
    {
        echo 'Image Displayed.';
    }
}
class VideoFile implements FileInterface
{
    function display()
    {
        echo 'Video Played.';
    }
}
$image = new ImageFile();
$video = new VideoFile();
$fileDisplay = new FileDisplay();
$fileDisplay->display($image);
$fileDisplay->display($video);
