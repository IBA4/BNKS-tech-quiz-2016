<?php

require "define_create_mcq.php";
$add = new define_create_mcq();

$add->question = "A collection of information about computing system is called";
$add->option_array = array("All", "Database", "Data", "Kernel", "Software", "Repository");
$add->add_to_db();

$add->question = "What is the abbreviation for Regular Expressions";
$add->option_array = array("Regexp", "AK47", "Rex", "RX", "RE", "Regex");
$add->add_to_db();

$add->question = "Which of the following is not related to Document Object Model(DOM)";
$add->option_array = array("Facebook", "Twitter", "Google", "Instagram", "Atom", "None");
$add->add_to_db();

$add->question = "To store a byte into an absolute memory is called";
$add->option_array = array("pick", "drop", "put", "stash", "like", "poke");
$add->add_to_db();

$add->question = "Which language is derived from Java";
$add->option_array = array("Javascript", "Vecta", "Python", "Korean", "PHP", "Scala");
$add->add_to_db();

$add->question = "The name of the first android OS is";
$add->option_array = array("Icecream Sandwich", "Barbeque", "Cherry", "Lalmon", "Apricot", "Cupcake");
$add->add_to_db();

$add->question = "Which is the most popular linux distro";
$add->option_array = array("Linux Mint", "Windows", "Fedora", "Back track", "Kali Linux", "Ubuntu");
$add->add_to_db();

$add->question = "What is the mascot of Linux";
$add->option_array = array("Ox", "Picachu", "Suzanne", "Sara", "Linus Torvalds", "Tux");
$add->add_to_db();

$add->question = "Which company does not use linux";
$add->option_array = array("Microsoft", "Facebook", "Valve", "Apple", "Google", "None");
$add->add_to_db();

?>
