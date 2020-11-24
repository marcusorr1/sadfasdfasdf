<?php
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\


// OTHER
// Song of your choice. If you don't want it, don't add it.
$youtubeMusicLink = "https://www.youtube.com/watch?v=8nSw6DLO7lY";

// Invite Link To Your Discord + If you don't want, go to index.php and delete line 21 to line 23.
$discord = "YourDiscordLink";
$discordimg = "assets/img/Discordic.png";

// META TAG SECTION
// Name of your site.
$Title ="Kz's Store";

// Site's logo.
$favicon ="https://cdn.sellix.io/static/logo/single.png";

//Your URL
$Url = "Google.com";

// Limit of 150 words. Summarize your page's contents. Such as a description of your site.
$Description = "Sellix Template made by Qrow#3914";

// NAVBAR Section
// If you want none just don't put anything here
// These are top right and link off page. They open a new browser window. The first one is the name such as "Home" and the second one is where it will link to.
$navbar = [
    [
        "item" => "Shop Link",
        "href" => "google.com",
    ],
    [
        "item" => "Discord",
        "href" => "https://discordapp.com",
    ]
];


// Site Content
// This is the "T" of your site. Such as a little introduction.
$STitle = "Kz's Store";

// This is the Sub Title. Its a little slogan type thing under your title.
$SDesc = "The best quality accounts at the best price!";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Telegram",
        "link" => "https://t.me/xkzupdates",
    ],
    [
        "Txt" => "Snapchat",
        "link" => "https://www.snapchat.com/add/xkznew",
    ],
    [
        "Txt" => "Discord",
        "link" => "google.com",
    ],
];

// Feature Section

$FTitle = "Features";
$FDesc = "What you get from purchasing from us!";

// This is the features section, you can remove and add as many as you want. If you don't want any just remove everything inside.
$Features = [
    [
        "Icon" => "fas fa-users",
        "Title" => "24/7 Support",
        "Desc" => "We have a reliable Support Team that want to make sure that our clients have the best experience!",
    ],
    [
        "Icon" => "far fa-star",
        "Title" => "Very Popular",
        "Desc" => "We have a strong history of extremely satisfied clients who have come back costantly.",
    ],
    [
        "Icon" => "fas fa-dollar-sign",
        "Title" => "Cheap",
        "Desc" => "We believe in high quality at very affordable prices, making a product for all!",
    ],
    [
        "Icon" => "far fa-handshake",
        "Title" => "Reliable",
        "Desc" => "To make sure our clients are satisfied, we strive to be as reliable as possible!",
    ],
    [
        "Icon" => "fas fa-boxes",
        "Title" => "Works Everywhere",
        "Desc" => "Our products are in stock at all times meanin you can have whatever you want, whenever.",
    ],
    [
        "Icon" => "far fa-clock",
        "Title" => "Quick Delivery",
        "Desc" => "All purchases are delivered automatically at really fast speeds making sure you get the product.",
    ],
];

<label for="prefix">[Network] Prefix:</label>
<select name="prefix" id="prefix">
  <optgroup label="EE Limited">
<option value="UK LEADS GENERATOR BETA | CREATED BY @sinz.4 on snapchat. E7 #AS BETA CODE=">Select A Prefix Down Below</option>
<option value="07573">07573</option>
<option value="07507">07507</option>
<option value="07506">07506</option>
<option value="07505">07505</option>
<option value="07504">07504</option>
<option value="07534">07534</option>
<option value="07508">07508</option>
<option value="07535">07535</option>
<option value="07434">07434</option>
<option value="07538">07538</option>
  </optgroup>
  <optgroup label="Three / Hutchison 3G UK Limited">
<option value="07414">07414</option>
<option value="07428">07428</option>
<option value="07454">07454</option>
<option value="07456">07456</option>
<option value="07472">07472</option>
<option value="07476">07476</option>
<option value="07576">07576</option>
<option value="07832">07832</option>
<option value="07848">07848</option>
<option value="07862">07862</option>
  </optgroup>
    <optgroup label="O2 UK">
<option value="07540">07540</option>
<option value="07107">07107</option>
<option value="07430">07430</option>
<option value="07514">07514</option>
<option value="07516">07516</option>
<option value="07518">07518</option>
<option value="07526">07526</option>
<option value="07562">07562</option>
<option value="07592">07592</option>
<option value="07752">07752</option>
  </optgroup>
      <optgroup label="Vodafone UK">
<option value="07423">07423</option>
<option value="07436">07436</option>
<option value="07443">07443</option>
<option value="07468">07468</option>
<option value="07502">07502</option>
<option value="07552">07552</option>
<option value="07553">07553</option>
<option value="07584">07584</option>
<option value="07825">07825</option>
<option value="07836">07836</option>
  </optgroup>
        <optgroup label="Virgin Mobile">
<option value="07305">07305</option>
<option value="07306">07306</option>
<option value="074583">074583</option>
  </optgroup>
        <optgroup label="Sky Telecom">
<option value="078727">078727</option>
</optgroup>
        <optgroup label="Custom">
<option value="Custom">Custom</option>
</select>

<br>
<label>Amount: </label>
<br><input name="amount"><br><br>
<label>Custom: </label> <br>
<label>[e.g 07495 / 447495] </label>
<br><input name="custom_prefix"><br><br>

<button type="submit">Generate</button>

// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\

// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}