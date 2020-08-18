<?php
// Include FB config file && User class
require_once 'fbConfig.php';

if(isset($_GET['logout'])){
    if($_GET['logout']=='true'){
	    $logoutUrl = $helper->getLogoutUrl($accessToken, $redirectURL);
        session_destroy(); 
    }
}

if(isset($accessToken)){
    if(isset($_SESSION['facebook_access_token'])){
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }else{
        // Put short-lived access token in session
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        
          // OAuth 2.0 client handler helps to manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
        
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        
        // Set default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    
    
    // Getting user facebook profile info
    try {
        $profileRequest = $fb->get('/me?fields=name,email');
        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
    } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        // Redirect user back to app login page
        header("Location: ./");
        exit;
    } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    
    // Initialize User class

    // Insert or update user data to the database

    // Put user data into session
    $_SESSION['IsFB'] = $fbUserProfile['id'];
    
    
    // Render facebook profile data
    if(!empty( $_SESSION['IsFB'])){
      
        $_SESSION['user'] = $fbUserProfile['id'];
        $_SESSION['hoten'] = $fbUserProfile['name'];
        // $fbUserProfile['email'];
       
        
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
    
}else{
    // Get login url
    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
    
    // Render facebook login button
    $output = '<a href="'.htmlspecialchars($loginURL).'"><img src="images/fblogin-btn.png"></a>';
}
?>
<html>
<head>
<title>Login with Facebook using PHP by CodexWorld</title>
<style type="text/css">
    h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
</head>
<body>
    <!-- Display login button / Facebook profile information -->
    <div>
    <?php
    if (isset($_SESSION['IsFB'])) 
    ?>
    </div>
</body>
</html>