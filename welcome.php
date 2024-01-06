<?php
session_start();  //很重要，可以用的變數存在session裡
$username=$_SESSION["username"];

echo "<h1>你好 ".$username."</h1>";
echo "<a href='logout.php'>登出</a>";
?>

<h2>更改密碼</h2>
<form action="change.php" method="post">
    新密碼：<input type="password" name="new_password"><br>
    確認新密碼：<input type="password" name="confirm_new_password"><br>
    <input type="submit" value="更改密碼">
</form>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd
 <section id="blog">
        <h2>Blog</h2>
        <article>
            <h3>Blog Post Title</h3>
            <p>Blog post content...</p>
            <form id="comment-form">
                <textarea id="comment-textarea" name="comment" placeholder="Enter comment..."></textarea>
                <button type="submit">Submit Comment</button>
            </form>
            <div id="comments-display">
                <!-- PHP代碼從這裡開始 -->
                <?php
                // 連接到數據庫
                $conn = require_once "config.php";

                // 檢查連接
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // 從數據庫獲取評論
                $sql = "SELECT nickname, content, created_at FROM comments ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    // 輸出評論
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='comment'>";
                        echo "<p><strong>" . htmlspecialchars($row['nickname']) . "</strong> <span>" . htmlspecialchars($row['created_at']) . "</span></p>";
                        echo "<p>" . htmlspecialchars($row['content']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>還沒有評論。</p>";
                }

                $conn->close();
                ?>
                <!-- PHP代碼結束 -->
            </div>
    </section>
<<<<<<< HEAD
=======
=======
<section id="blog">
    <h2>Blog</h2>
    <article>
        <h3>Welcome to our youtube platform</h3>
        <p>Blog post content...</p>
        <form id="comment-form">
            <textarea id="comment-textarea" name="comment" placeholder="Enter comment..."></textarea>
            <button type="submit">Submit Comment</button>
        </form>
        <div id="comments-display">
            <!-- Comments will be loaded here -->
        </div>
    </article>
</section>
>>>>>>> c86895e96821394ca5f27e182d0c4e33c0e186a3
>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd
<!-- End of content from website.html -->

<script>
        // This function will be called when the form is submitted
        function submitComment(event) {
            event.preventDefault();  // Prevent normal form submission

            var xhr = new XMLHttpRequest();
            var formData = new FormData(document.getElementById('comment-form'));
<<<<<<< HEAD
            var username = <?php echo json_encode($username); ?>;
=======
<<<<<<< HEAD
            var username = <?php echo json_encode($username); ?>;
=======

>>>>>>> c86895e96821394ca5f27e182d0c4e33c0e186a3
>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd
            xhr.open('POST', 'handle_comment.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        var commentsDisplay = document.getElementById('comments-display');
                        commentsDisplay.innerHTML += '<div><strong>' +
<<<<<<< HEAD
                            username + '</strong> ' + response.comment + '</div>';
=======
<<<<<<< HEAD
                            username + '</strong> ' + response.comment + '</div>';
=======
                            'Guest:</strong> ' + response.comment + '</div>';
>>>>>>> c86895e96821394ca5f27e182d0c4e33c0e186a3
>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd
                        document.getElementById('comment-textarea').value = ''; // Clear the textarea
                    } else {
                        alert('Error: ' + response.error);
                    }
                } else {
                    alert('An error occurred while submitting the comment.');
                }
            };
            xhr.send(formData);
        }

        // Function to attach the event listener to the form
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('comment-form').addEventListener('submit', submitComment);
        });
    </script>