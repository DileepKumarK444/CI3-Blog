<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI3 - Blog</title>
    <link href="
https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/cerulean/bootstrap.min.css
" rel="stylesheet"></link>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>">CI3-Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)==""){echo "active";}?>" href="<?php echo base_url();?>">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="about"){echo "active";}?>" href="<?php echo base_url();?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="posts"){echo "active";}?>" href="<?php echo base_url();?>posts">Posts</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">