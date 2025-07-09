<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CSS Position Demo</title>
  <style>
    body {
      height: 2000px; /* for scroll */
      padding: 20px;
      font-family: sans-serif;
    }

    .box {
      width: 200px;
      height: 100px;
      margin-bottom: 20px;
      color: white;
      padding: 10px;
    }

    .static {
      background: gray;
      position: static;
    }

    .relative {
      background: blue;
      position: relative;
      top: 20px;
      left: 20px;
    }

    .absolute-container {
      position: relative;
      height: 200px;
      background: #ddd;
      margin-bottom: 20px;
    }

    .absolute {
      position: absolute;
      top: 10px;
      left: 10px;
      background: red;
      width: 180px;
      height: 80px;
    }

    .fixed {
      background: green;
      position: fixed;
      top: 10px;
      right: 10px;
      z-index: 999;
    }

    .sticky-container {
      height: 600px;
      overflow: auto;
      border: 2px solid black;
    }

    .sticky {
      background: orange;
      position: sticky;
      top: 0;
      padding: 10px;
    }
  </style>
</head>
<body>

  <div class="box static">🔲 Static (default)</div>

  <div class="box relative">📦 Relative (moved 20px down/right)</div>

  <div class="absolute-container">
    <div class="box absolute">📍 Absolute (inside gray box)</div>
  </div>

  <div class="box fixed">📌 Fixed (top-right corner even on scroll)</div>

  <div class="sticky-container">
    <div class="sticky">🧷 Sticky Header (sticks to top while scrolling)</div>
    <p>Scroll this container to see the sticky effect in action...</p>
    <p style="height: 1000px;">Content goes here...</p>
  </div>





</body>
</html>
