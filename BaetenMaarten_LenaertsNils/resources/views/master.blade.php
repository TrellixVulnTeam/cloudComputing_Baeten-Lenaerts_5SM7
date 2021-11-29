<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="functions.js">
        </script>
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
            }

            li {
              float: left;
            }

            li a, .dropbtn {
              display: inline-block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
              background-color: red;
            }

            li.dropdown {
              display: inline-block;
            }

            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 200px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }

            .dropdown-content a:hover {background-color: #f1f1f1;}

            .dropdown:hover .dropdown-content {
              display: block;
            }
        </style>
       
    
    </head>
    <body>
      
        <ul>
        <li>
            <div id="homeButtonLogo" style="width: 50px;">
                <a  href="/">
                <img src="images/logo.png" alt='logo' style="width:50px;height:50px;">
                </a>
            </div>
        </li>    
        <li><a href="home">Home</a> </li>
        <li><a href="login">Login</a></li>
        <li><a href="homebrew">Homebrew</a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Rules</a>
          <div class="dropdown-content">
            <a href="spells">Spells</a>
            <a href="foundClasses">Classes</a>
            <a href="">Races</a>
          </div>
        </li>
        <li><a href="calendar">Calendar</a></li>
        </ul>
        <h2>@yield('subtitle')</h2>
        @yield('content')
        
        <hr/>
    </body>
</html>

