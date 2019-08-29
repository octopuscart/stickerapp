<?php

$menuitems = [
    array(
        "title" => "Home",
        "icon" => "ion-ios-home",
        "link" => site_url("/")),
    array(
        "title" => "About Us",
        "icon" => "ion-ios-list-box",
        "link" => site_url("aboutus")),
    array(
        "title" => "Menu",
        "icon" => "ion-ios-clipboard",
        "link" => site_url("our-menu")
    ),
    array(
        "title" => "Gallery",
        "icon" => "ion-ios-images",
        "link" => site_url("gallery")
    ),
    array(
        "title" => "Book Now",
        "icon" => "ion-ios-create",
        "link" => site_url('booknow')
    ),
    array(
        "title" => "Loyalty Program",
        "icon" => "ion-ios-contacts",
        "link" => site_url("loyalprogram")
    ),
    array(
        "title" => "Contact Us",
        "icon" => "ion-ios-map",
        "link" => site_url('contact-us'),
    ),
];


$templogin = array(
    "title" => "Profile",
    "icon" => "ion-ios-person",
    "link" => site_url('Account/profile'),
);
$session_data = $this->session->userdata('logged_in');
if ($session_data) {
    array_push($menuitems, $templogin);
}
?>