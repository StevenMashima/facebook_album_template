# facebook_album_template
A simple on the go Facebook Album API, design included. Just write a few lines of code and you're good to go!

<h1>Installation</h1>
&#183; Download all the assets here, </br>
&#183; Create your own index at the same directory with facebookalbum.php </br>
&#183; Add a few lines on your index : </br>
```
include_once 'Facebookalbum.php';
$facebook = new Facebookalbum(); //New Class
$facebook->setAPI(YOUR_API_KEY_HERE); //Set your API KEY from developers.facebook.com
$facebook->setAlbumID(YOUR_ALBUM_ID_HERE); //Set your ALBUM ID from prefered Album on any facebook page.
$facebook->setTitle(MAIN_TITLE); //Set main title of your albums
$facebook->setSubTitle(SUB_TITLE); //Set sub title of your albums
$facebook->renderSource(); //Setup the sources
$facebook->renderHeader(); //Render the header
$facebook->renderGallery(); //Render the galleries
$facebook->renderPagination(); //Render pagination
```
<h1>Previews</h1>
<img src='https://lh3.googleusercontent.com/g5cORMkYOrp_4XM7wH2C1nMDTvR8UcESVpoIUaJ-1YaSwFNuf__DGfqCme26rmheAeNBkksXrz3-97EOWNwV05qrnVhaoOXdzONIwUGHGKHsH0tvgvu4I4WnW-QC3nusR8gWsEVrmUEJlPuZpqLfyWS2HmqXIFpOdrqkoMJS6sR4BU2Tf7qhre19Tgp6Occel0HSRTAJCrCeR7CpyAV-JlBTUYui8k4nik2kGv7JH2f_kAx5LaRROTH8aTPVagN1-6V8ik8RYwhROq81MlgxW6cZlnngAkkJAtyXXcyvMVOIrIKvnJ9BP5LbAO2nRGXipi7iTFwS6Hq43amdO3PMr3IamCm_Y7GWRUuXNO7FId33I5FTuH8gp88mPUkI1EijWFDJJtu83CD_krX4tEyB8MsMQo-UO3HDVI0885K2ajHQWrLAaQEe-zIO_owAZsS1Cyw9QYhTiY6gj-yugljibKU3yF8H2Oj_LPcfgIFa3rtD4EJxsbymh_TovATlXdViysExcZzCUCN-FxcRkF9jwEWHfJrFSo1xaLCSpAhUjZ4CXc5Nrfd0xOA7GCccbZyVzQHoDhNW=w1366-h662-k'>
<img src='https://lh3.googleusercontent.com/61uy1P9XHNxrkqPYTHHN9eZDxUe-TPC5QhpVBC4zQk8Af86Idu5bShSgtRlEWkYpT7hOrBaxJ6OwT8VchO2Ja78tmExLvbXPRzzKSTkUzWJniueqxFoRh6QsXYszzTTnV6cDiARn81L0jf4rL20DKt3Exi9DUIFaP6x8VqkhJ8JJAZMUAlGX5bBeatCUI0d_VJpP1AeDlOI6ulAB0xiUWZto4sefo2W2By6ODfPaQINQXJSuA1crsPxFRPjkU5wgwmyj5aldJhvnA_9oovh1z4jI_paavTXRAvbegb4TtezsriFzr8Lx0Tz8tVwMLRi7f_VVitK-N3xODCcTLWO8O-mfX3H7f4b8FvLxHqRDHYiHRmKHik5adMWSqus12SfHsnq_jJJvHU3j0iWjTqv9MI63YXZe0SY88hrV_ezs4enX2ffVXtwuwryMDb1ddwuT5c-cDdWtQZbGDmvn-l4R7JDswcnGpSO1-28K4zqcwrbqDfJVEW7GF4KBVXKE0Lvby-6dlfBcol1eIZwNU6sQ2vlBnsmvTyKYHwcRhNdyAisypcJATylGP3LYLZCXcYqDKabPiOsL=w1366-h662-k'>
<img src='https://lh3.googleusercontent.com/MCCYQb-SESqJf-68Ma8jWYsnHJUk0PsO-eMx0eH_BMw5hCtXJiywX8QOH68PHme2NIfj7X37s3pb9jUDuDJvVdUOa0_Gn_Z52dW-AaaTYMwhAG3bQmz9cu5s-g3jVudFGllaXwqrY3pvh_CaEX0dlKwT0oScSOjwETpsDAOY0f7MWvQ-uIchN8MO6leQPPARxs8xPZ6oeSzS00P1ibFZFHAUNbWADJnwxnSPckkPTpmsZNiMPhRTlPKJ_hPSPhMf_Ae0zcIS5hoEbfu5qxm-WW5eBe9xrE0q9LQKpCZ_Dbv4H2u7YBpcLju9iplmN08Uc4BZy24dk0TzXrxbhxj7EmXIrjjBT-R6iJewT43nlGD8aaVtWryAr8XwTeR0moFKCaDrQzOVeIExkCkNBhLHsTunMlqt0U0Cj2quI6W4BsMLSTWVznKdl0JAiUTYaHn2b5BWo501uNiwLEAWfv_RC4_nf26WL4zADZP1edFiMotSvi1IrOdRpDN08zMl1bpz5M0FcmAe4ftc8QS0POtPuT2stwiRuLxBHpHjuMW5Njz5xborWQpvsTzdNrTlqYuYU5j73_N9=w1366-h662-k'>
