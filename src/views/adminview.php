    <h2>Create New Record</h2>
    <form action="../src/scripts/create.php" method="POST">
        <label for="page">Page:</label>
        <input type="text" id="page" name="page" placeholder="must fill" required>
        <label for="title">Title:</label>
        <input type="title" id="title" name="title">
        <label for="languages">Languages:</label>
        <input type="languages" id="languages" name="languages">
        <label for="link">Link:</label>
        <input type="link" id="link" name="link">
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" style ="width: 100%" maxlength="600" placeholder="600 chars max"></textarea>
        <button type="submit">Create</button>
    </form>
    <h2>Existing Records</h2>
    <div class="table-container">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page</th>
                <th>Title</th>
                <th>Content</th>
                <th>Languages</th>
                <th>Link</th>
                <th>Alter</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $record) 
            {
                echo "<tr>";
                echo "<td>{$record['id']}</td>";
                echo "<td>{$record['page']}</td>";
                echo "<td>{$record['title']}</td>";
                echo "<td>{$record['content']}</td>";
                echo "<td>{$record['languages']}</td>";
                echo "<td>{$record['link']}</td>";
                echo "<td><a href='../src/scripts/edit.php?id={$record['id']}'>Edit</a> | <a href='../src/scripts/delete.php?id={$record['id']}' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
        </div>
</html>
<?php include_once(APP_ROOT . '/src/views/footerview.php'); ?>