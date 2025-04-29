<form action="submit_comment.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" size="40" name="title" required><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>