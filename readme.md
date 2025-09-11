# Clickable Photo List

`Last Update: 11/09/2025 - 15:41`

This is a simple project to demonstrate how to create a clickable photo list using PHP and JSON. You can use this repository to create your own photo list.

## Sections

+ [Instructions](#instructions) | [Requirements](Requirements) | [Authorship](#authorship) | [License](#license)

## Instructions

+ You'll need a local server, a version control system, somewhere to store your images and a structured JSON file.

+ If you know `git bash` and how to clone a repository to your command line or terminal, you can clone this repository with `git clone https://github.com/jg-digital-media/clickable_photo_list.git`. Or you can download the zip file from the GitHub Repository and extract it to a folder on your local server.

+ Now go to your JSON file and add the photos you want to display. You'll need a place to store your images with links so they can be publicly accessible.

  + `photo_list.json` - This is the file that will contain the list og photos that you will use. It's a simple JSON file with the following structure:  a `filename`. A `filepath`. A `caption` to go with each individual image. The `date` that the photo was taken. You can add any number of additional keys and values to each individual photo. `additional_key_one` is only one example of a key that you can use.

  + You can modify the structured data in any way you wish, but the project will require the `filepath` and `caption keys` to be used.

```json
[
    {
        "filename": "IMG_8194.JPG",
        "filepath": "https://jgdm-projects.s3.eu-west-2.amazonaws.com/clickable_photo_list/flowers/IMG_8194.JPG",
        "caption": "caption",
        "additional_key_one": "additional_key_value_one",
        "date": "22-08-2025"
    }, {
        "filename": "IMG_8194.JPG",
        "filepath": "IMG_8194.JPG",
        "caption": "caption",
        "additional_key_one": "additional_key_value_one",
        "date": "22-08-2025"

    }
]
```

+ `index.php` - This is the main file that will be used to display the photos. It will load the JSON file and display the photos in a list. You can modify the list of photos to display by changing the `photos` array in the PHP file.

### Load the JSON file

+ Put the following code in your `index.php` file.  This will acccess the JSON file using a relative path and parse the data into an array - to make it readable.

```php
    <?php 

        // Load and parse the JSON data
        $json_data = file_get_contents('photo_list.json');
        $photos = json_decode($json_data, true);
        
        // Get the first photo for default display
        $default_photo = $photos[0];

    ?>
```

### Display the Photos 

Now, this is the more complicated part. This is the syntax this app uses to parse and display the data in your JSON file.

```php

    <?php // parse the main image ?>

        <div id="photos">
            <img src="<?php echo htmlspecialchars($default_photo['filepath']); ?>" alt="<?php echo htmlspecialchars($default_photo['caption']); ?>">
        </div>
    ?>
       
```

Which will leave you with code that looks something like this:

```html 

    <div id="photos">

        <img src="file/to/file.jpg" alt="caption" style="opacity: 1;">

    </div>

```

### Customise the photo list

```php

    <?php 
        <img src="<?php echo htmlspecialchars($default_photo['filepath']); ?>" alt="<?php echo htmlspecialchars($default_photo['caption']); ?>">

    ?>
```

Now the caption 

```php

    <div class="photo---caption">
        <?php echo htmlspecialchars($default_photo['caption']); ?> <span>(<?php echo htmlspecialchars($default_photo['caption']); ?>)</span>
    </div>
```

You can add any number of additional keys and values to each individual photo. You can also add new photos to the list. The project will require the filepath and caption keys to be used.

To generate the list, embed the caption text you'd like to serve as the image title into a list element.

```php 

<aside id="url---list">
            
 <ul>
    <?php foreach($photos as $photo): ?>
    <li><a href="#" data-image="<?php echo htmlspecialchars($photo['filepath']); ?>" data-caption="<?php echo htmlspecialchars($photo['caption']); ?>" data-scientific="<?php echo htmlspecialchars($photo['caption']); ?>"><?php echo htmlspecialchars($photo['caption']); ?></a></li>
    <?php endforeach; ?>
</ul>

```

If you look at `foreach($photos as $photo): ?>` you'll see that the `foreach` loop is iterating the data stored and made readable in $json_data and does this for as many times as there are photos in the JSON file. And we're displaying the data in the same way as before by using a JSON key.  `<?php echo htmlspecialchars($photo['caption']); ?>`.



## Requirements

+ Git Bash - https://git-scm.com/downloads or acccess to GitHub to access the Zip file.
+ GitHub Repository - https://github.com/jg-digital-media/clickable_photo_list
+ A local Server - Xampp - https://www.apachefriends.org/download.html
+ Structured JSON File - https://projects.jonniegrieve.co.uk/clickable_photo_list/photo_list.json
+ A collection of 3 or more photos in a secure location.  If you wish you can add images to the root directory of this project  


```

"filepath": "example.jpg"

```

[Back to top](#clickable-photo-list)

## Authorship

I created this project with the use of AI to provide a differnt way of interacting with an image viewer. Doing it this way with a GitHub Repository will help users customise the project to suit their own needs and everyone is welcome to do so.

Drop me a message on Twitter/X [@jg_digitalMedia](https://twitter.com/jg_digitalMedia) or email me at [mail@jonniegrieve.co.uk](mailto:mail@jonniegrieve.co.uk).

[Back to top](#clickable-photo-list)
