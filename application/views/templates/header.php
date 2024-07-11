<html>
<head>
  <title>ciBlog</title>
  <style>
    body {
      font-family: 'Arial';
    }
    .post-date{
      background:#f4f4f4;
      padding:4px;
      margin:3px 0;
      display:block;
    }

    .post-thumb{
      width:100%;
    }

    .pagination-links{
      margin:30px 0;
    }

    .pagination-links strong{
      padding: 8px 13px;
      margin:5px;
      background: #f4f4f4;
      border: 1px #ccc solid;
    }

    a.pagination-link{
      padding: 8px 13px;
      margin:5px;
      background: #f4f4f4;
      border: 1px #ccc solid;
    }

    .cat-delete{
      display:inline;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">CodeIgniter Blog</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts/">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>pages/newpage">New Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Create a Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a> -->
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">