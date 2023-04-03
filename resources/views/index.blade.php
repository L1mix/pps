<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token()}}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        @import"https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap";

.login {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh
}

form {
    background-color: #e6e6e6;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px #0000001a;
    display: flex;
    flex-direction: column;
    align-items: center
}

form h2 {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: 700;
    color: #1e90ff;
    font-family: Ubuntu, sans-serif
}

.select {
    width: 100%;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #acacac;
    font-size: 16px;
    font-family: Ubuntu, sans-serif;
    background-color: #eee;
    border-radius: 6px
}

form input[type=text],
form input[type=email],
form input[type=password] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-family: Ubuntu, sans-serif
}

form input[type=submit] {
    width: 100%;
    padding: 10px;
    background-color: #1e90ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: poi nter
}

form input[type=submit]:hover {
    background: #0565e3
}

form a {
    color: #000;
    margin-top: 20px;
    font-size: 15px;
    text-align: center;
    display: block;
    text-decoration: none;
    font-family: Ubuntu, sans-serif;
    transition: ease-in .2s
}

form a:hover {
    color: #1e90ff
}

.titlePunkt {
    font-weight: 700
}

.form {
    margin: 20px 0
}

.accordion {
    cursor: pointer;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: .4s
}

.active,
.accordion:hover {
    background-color: #ccc
}

.panel {
    padding: 0 18px;
    background-color: #e4e4e4;
    max-height: 0;
    overflow: hidden;
    transition: max-height .2s ease-out
}

.answer,
.answer p {
    flex-wrap: nowrap;
    display: flex;
    justify-content: space-between;
    align-items: center
}

.answer p select {
    max-width: 100px;
    height: 20px;
    margin: auto
}

.answer p:first-child {
    max-width: 1100px
}

.accordion:after {
    content: "\2795";
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px
}

.active:after {
    content: "\2796"
}

input[type=number],
input[type=file] {
    font-family: Ubuntu, sans-serif;
    width: 70px;
    height: 20px;
    margin-right: 0%
}

.topnav {
    overflow: hidden;
    background-color: #e6e6e6
}

.topnav a {
    float: left;
    color: #1e90ff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: 700;
    font-size: 18px
}

.topnav a:last-child {
    float: right
}

.topnav a:hover {
    background-color: #ccc;
    color: #474747
}

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    border-radius: 10px;
    margin: 20px 0
}

.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    font-family: Ubuntu, sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 14px 16px;
    transition: .3s
}

.tab button:hover {
    background-color: #ddd
}

.tab button.active {
    background-color: #ccc
}

.tabcontent {
    display: none;
    background-color: #f1f1f1;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    border-top: none
}

.tabcontent a {
    text-decoration: none;
    display: inline-block;
    width: 140px;
    height: 45px;
    line-height: 45px;
    border-radius: 45px;
    margin: 10px;
    font-family: Montserrat, sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 3px;
    font-weight: 600;
    color: #fff;
    background: #2EE59D;
    box-shadow: 0 8px 15px #0000001a;
    transition: .3s
}

.tabcontent a:hover {
    background: white;
    box-shadow: 0 15px 20px #2ee59d66;
    color: #524f4e;
    transform: translateY(-7px)
}

.table {
    width: 100%;
    border: none;
    margin-bottom: 20px;
    border-collapse: separate
}

.table thead th {
    font-weight: 700;
    text-align: left;
    border: none;
    padding: 10px 15px;
    background: #cecece;
    font-size: 16px;
    border-top: 1px solid #ddd
}

.table tr th:first-child,
.table tr td:first-child {
    border-left: 1px solid #ddd
}

.table tr th:last-child,
.table tr td:last-child {
    border-right: 1px solid #ddd
}

.table thead tr th:first-child {
    border-radius: 20px 0 0
}

.table thead tr th:last-child {
    border-radius: 0 20px 0 0
}

.table tbody td {
    text-align: left;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    vertical-align: top
}

.table tbody tr:nth-child(even) {
    background: #d6d6d6
}

.table tbody tr:last-child td {
    border-bottom: 1px solid #ddd
}

.table tbody tr:last-child td:first-child {
    border-radius: 0 0 0 20px
}

.table tbody tr:last-child td:last-child {
    border-radius: 0 0 20px
}

.container {
    max-width: 1400px;
    margin: auto
}

body {
    margin: 0;
    height: 100vh;
    font-family: Ubuntu, sans-serif;
    background: linear-gradient(to bottom right, #43c6ac, #f8ffae)
}
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
