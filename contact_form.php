<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");
date_default_timezone_set('America/Denver');
$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('saltflatsfilmfestival@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');
$hideForm = false;

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        //$formproc->RedirectToURL("/");
         $result="<div class=\"message success\">Thank you $formproc->name, your message has been sent. We will try
         to respond soon.</div>";
   }
   else {
        $result='<div class="alert-error">Sorry there was an error sending your message. Please try again later</div>';
    }
    echo $result;
    $hideForm = true;
}
if (!$hideForm)
{
	include_once("form.php");
}
?>
