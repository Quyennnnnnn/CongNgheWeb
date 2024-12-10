<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <!-- CSS trực tiếp trong file -->
    <style>
        /* General reset to remove default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        /* Container for the page */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title section */
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Individual post styling */
        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Title of the post */
        .post h2 {
            font-size: 24px;
            color: #2980b9;
            margin-bottom: 10px;
        }

        /* Content of the post */
        .post p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        /* Metadata (Date, Author) */
        .post-meta {
            font-size: 14px;
            color: #7f8c8d;
        }

        /* Link styles */
        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Search bar styling */
        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 10px 15px;
            margin-left: 10px;
            border: none;
            background-color: #2980b9;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #3498db;
        }

        /* Pagination styling */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #ecf0f1;
            border-radius: 4px;
            color: #2980b9;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #bdc3c7;
        }

        .pagination .active {
            background-color: #2980b9;
            color: white;
        }

        .pagination .disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Posts</h1>

        <!-- Search form -->
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="button">Search</button>
        </div>

        <!-- Posts -->
        <div class="post">
            <h2>First Post</h2>
            <p>Content for the first post.</p>
            <div class="post-meta">Posted on December 10, 2024 by Author</div>
        </div>

        <div class="post">
            <h2>Second Post</h2>
            <p>Content for the second post.</p>
            <div class="post-meta">Posted on December 10, 2024 by Author</div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#" class="disabled">Next</a>
        </div>
    </div>
</body>
</html>
