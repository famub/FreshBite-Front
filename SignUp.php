
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FreshBite - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="split-container">
        <div class="left-side">
            <div class="content-box">
                <h2>Sign Up!</h2>
                <p style="margin-bottom: 20px; color: #666;">Create your account to get started.</p>
                
                <!-- الفورم الآن POST ويرسل بيانات الصورة -->
                <form action="signup_process.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="firstName" placeholder="First Name" class="input-field" required>
                    <input type="text" name="lastName" placeholder="Last Name" class="input-field" required>
                    <input type="email" name="email" placeholder="Email Address" class="input-field" required>
                    <input type="password" name="password" placeholder="Password" class="input-field" required>
                    
                    <div class="profile-upload">
                        <label>Profile Picture:</label>
                        <input type="file" name="photo" accept="image/*" class="file-input">
                    </div>
                    
                    <button type="submit" class="dark-btn">Create Account</button>
                </form>
                
                <p class="signup-text">
                    Already have an account? <a href="login.html" class="signup-link">Log-in</a>
                </p>
                
                <!-- عرض رسالة خطأ إذا البريد مسجل مسبقًا -->
                <?php
                if(isset($_GET['error']) && $_GET['error'] == 'EmailAlreadyExists'){
                    echo '<p style="color:red; margin-top:10px;">This email is already registered!</p>';
                }
                ?>
            </div>
        </div>
        <div class="right-side"></div>
    </div>
</body>
</html>