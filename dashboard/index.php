<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap"
          rel="stylesheet">


    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
            crossorigin="anonymous"></script>

    <!-- <script defer
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script defer
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script> -->
    <script defer
            src="assets/js/main.js"></script>

    <title>Logista -Map</title>
</head>

<body class="map-page_container">
    <nav class="navigation">
        <ul class="navigation_list navigation_first">

            <li class="navigation_item navigation_hamburgerBtn">
                <div class="navigation_hamburgerBtn--item"></div>
            </li>

            <li class="navigation_item navigation_logoContainer">
                <a href="#"
                   class="navigation_link">
                  <!--  <img class="navigation_logo"
                         src="assets/images/logos/svg/inner_logo.svg"
                         alt="Logista Logo"> -->  LOGISTA
                </a>
            </li>

            <li class="navigation_item">
                <a href="#"
                   class="navigation_link navigation_box">
                    <div class="navigation_box--item navigation_box--active"><i class="far fa-map"></i> MAP</div>
                    <div class="navigation_box--item"><i class="fas fa-list-ul"></i> List</div>
                </a>
            </li>

            <li class="navigation_item">
                <a href="#"
                   class="navigation_link navigation_box">
                    <div class="navigation_box--item ">Today 12:00AM - 11:59 PM</div>
                    <div class="navigation_box--item"><i class="fas fa-caret-down"></i></div>
                </a>
            </li>
            <li class="navigation_item">
                <a href="#"
                   class="navigation_link navigation_box">
                    <div class="navigation_box--item">All Teams</div>
                    <div class="navigation_box--item"><i class="fas fa-caret-down"></i></div>
                </a>
            </li>
        </ul>

        <ul class="navigation_list navigation_second">

            <li class="navigation_item">

                <a href="#"
                   class="navigation_link navigation_box-rounded">
                    <div class="navigation_box--item-rounded">Create Task</div>
                    <div class="navigation_box--item-rounded createTaskBtn"><i class="fas fa-caret-down"></i></div>
                </a>

            </li>

            <div class="nav_popup createTaskContainer">
                <a class="nav_popup-text"
                   href="#">Bulk Import</a>
            </div>

            <li class="navigation_item">
                <a href="#"
                   class="navigation_link menu_navigation_btn">
                    <i class="navigation_icon fas fa-th"></i>
                </a>
            </li>

            <div class="nav_popup menu_navigation_container">
                <div class="menu_navigation_container-grid">
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>

                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>

                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                    <div class="menu_navigation_container-box">
                        <img class="menu_navigation_container-img"
                             src="https://img.icons8.com/plasticine/2x/google-logo.png"
                             alt="blo">
                        <p class="menu_navigation_container-par">My Chats</p>
                    </div>
                </div>
            </div>

            <li class="navigation_item">
                <a href="#"
                   class="navigation_icon navigation_link">
                    <i class="fas fa-redo-alt"></i>
                </a>
            </li>
            <li class="navigation_item">
                <a href="#"
                   class="navigation_icon navigation_link notification_btn">
                    <i class="fas fa-bell"></i>
                    <div class="notification_number">
                        1
                    </div>
                </a>
            </li>

            <div class="nav_popup  notification_nav_container">
                <div class="notification_container">
                    <h2 class="notification_container--header">Updates</h2>
                    <ul class="notification_container--list">
                        <a class="notification_container--item"
                           href="#">
                            <div class="notification_container--navigation_icon-contianer">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="notification_container--navigation_text">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi nostrum nisi
                                </p>
                                <span>today</span>
                            </div>
                        </a>
                    </ul>
                    <div class="notification_footer">
                        <a href="#">More Updates</a>
                    </div>
                </div>
            </div>
        </ul>

        <div class="hamburger_menu">
            <div class="hamburger_menu-header">
                <div class="hamburger_btn-back_container">
                    <div class="navigation_hamburgerBtn--item"></div>
                </div>
                <div class="hamburger_logo">
                   <!-- <img src="assets/images/logos/svg/inner_logo.svg"
                         alt="Logista logo"> -->  LOGISTA
                </div>
            </div>

            <ul class="hamburger_list">
                <li class="hamburger_list">
                    <a class="hamburger_link hamburger_link--active"
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-cog"></i>
                        </span>
                        <p class="hamburger_item-txt">dashboard</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-user"></i>
                        </span>
                        <p class="hamburger_item-txt">Agent</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-user-friends"></i>
                        </span>
                        <p class="hamburger_item-txt">Customers</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon far fa-chart-bar"></i>
                        </span>
                        <p class="hamburger_item-txt">Analytics</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-cog"></i>
                        </span>
                        <p class="hamburger_item-txt">Settings</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-comment-dots"></i>
                        </span>
                        <p class="hamburger_item-txt">Chat</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-puzzle-piece"></i>
                        </span>
                        <p class="hamburger_item-txt">Extensions</p>
                    </a>
                </li>
                <li class="hamburger_list">
                    <a class="hamburger_link "
                       href="#">
                        <span class="hamurger_link-icon_container">
                            <i class="hamurger_link-icon fas fa-headset"></i>
                        </span>
                        <p class="hamburger_item-txt">Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="map">
        <div class="map_info-col">
            <div class="map_info-col_collaps map_info-col_collaps--tasks"><i class="map_info-col_icon--tasks fas fa-chevron-left"></i></div>
            <div class="map_tasks">
                <div class="map_info-col__header">
                    <h2 class="map_info-col__heading">Tasks</h2>
                    <i class="map_info-col__icon fas fa-search"></i>
                </div>
                <div class="map_info-col__subhead">
                    <li data-taskTab="0"
                        class="map_info-col__subhead-item map_info-col__subhead-tasks"><span>0</span> UNASSIGNED</li>
                    <li data-taskTab="1"
                        class="map_info-col__subhead-item map_info-col__subhead-tasks map_info-col__subhead-item--active"><span>0</span> ASSIGNED</li>
                    <li data-taskTab="2"
                        class="map_info-col__subhead-item map_info-col__subhead-tasks"><span>0</span> COMPLETED</li>
                </div>
                <div class="map_info-col__containar">

                    <div class="map_info-col__containar-tabTask"
                         data-taskTab="0">
                        <div class=" tasks__empty_message-container">
                            <p class="tasks__empty_message">
                                no task available for the day
                            </p>
                        </div>
                    </div>

                    <div class="map_info-col__containar-tabTask map_info-col__containar-tabTask--active"
                         data-taskTab="1">
                        <div class="map_info-col__item map_info-col__item-task">
                            <div class="map_info-col__item--assigning">
                                Assigned
                            </div>
                            <div class="map_info-col__item--image_container">
                                <div class="map_info-col__item--image">
                                    <img src="assets/images/logos/defaul-profile-pic.png"
                                         alt="user name">
                                </div>
                                <p class="map_info-col__item--image_name">Zeyad Zaher</p>
                            </div>

                            <div class="map_info-col__item-task--progress">
                                <div class="map_info-col__item-points map_info-col__item-points--fill map_info-col__item-point-frist">A</div>
                                <div class="map_info-col__item-line"></div>
                                <div class="map_info-col__item-points map_info-col__item-points--border map_info-col__item-point-last">B</div>
                            </div>

                            <div class="map_info-col__item-task--info">
                                <div class="map_info-col__item-task--starting">
                                    <div class="map_info-col__item-task--time">4:20am</div>
                                    <h4 class="map_info-col__item-task--title">Alex</h4>
                                    <p class="map_info-col__item-task--address">Alexandria, Egypt</p>
                                    <span class="map_info-col__item-task--status">Assigned</span>
                                </div>
                                <div class="map_info-col__item-task--dropoff">
                                    <div class="map_info-col__item-task--time">8:20am</div>
                                    <h4 class="map_info-col__item-task--title">Alex</h4>
                                    <p class="map_info-col__item-task--address">Alexandria, Egypt</p>
                                    <span class="map_info-col__item-task--status">Assigned</span>
                                </div>
                            </div>

                            <div class="map_info-col__item-task--more">
                                <i class="map_info-col__item-task--icon_more fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="map_info-col__containar-tabTask"
                         data-taskTab="2">
                        <div class=" tasks__empty_message-container">
                            <p class="tasks__empty_message">
                                no task available for the day
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="map_container">
        </div>

        <div class="map_info-col">
            <div class="map_info-col_collaps map_info-col_collaps--agents"><i class="map_info-col_icon--agents fas fa-chevron-right"></i></div>
            <div class="map_agents">
                <div class="map_info-col__header">
                    <h2 class="map_info-col__heading">Agents</h2>
                    <i class="map_info-col__icon fas fa-search"></i>
                </div>
                <div class="map_info-col__subhead">
                    <li data-agentTab="0"
                        class="map_info-col__subhead-item map_info-col__subhead-agents"><span class="map_info-col_number--agents">0</span> FREE</li>
                    <li data-agentTab="1"
                        class="map_info-col__subhead-item map_info-col__subhead-agents map_info-col__subhead-item--active"><span class="map_info-col_number--agents">1</span> BUSY</li>
                    <li data-agentTab="2"
                        class="map_info-col__subhead-item map_info-col__subhead-agents"><span class="map_info-col_number--agents">0</span> INACTIVE</li>
                </div>
                <div class="map_info-col__containar">
                    <div data-agentTab="0"
                         class="map_info-col__containar-tabAgnet">
                        <div class="map_info-col__item">
                            <div class="map_info-col__item--image">
                                <img src="assets/images/logos/defaul-profile-pic.png"
                                     alt="user name">
                                <div class="agent_activity  agent_activity--online"></div>
                            </div>
                            <div class="map_info-col__item--info">
                                <h3 class="map_info-col__item--name">Ahmed Mohamed</h3>
                                <p class="map_info-col__item--number"><span class="map_info-col__item--number_nation">+20</span> 01280919630</p>
                            </div>
                            <div class="map_info-col__item--assign">
                                <div class="map_info-col__item--tasksNumber">
                                    <span class="map_info-col__item--tasks_circle">0</span>
                                    <p class="map_info-col__item--task-p">Task</p>
                                </div>
                                <div class="map_info-col__item--moreInfoBtn">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-agentTab="1"
                         class="map_info-col__containar-tabAgnet map_info-col__containar-tabAgnet--active">
                        <div class="map_info-col__item">
                            <div class="map_info-col__item--image">
                                <img src="assets/images/logos/defaul-profile-pic.png"
                                     alt="user name">
                                <div class="agent_activity  agent_activity--busy"></div>
                            </div>
                            <div class="map_info-col__item--info">
                                <h3 class="map_info-col__item--name">Salah Mohamed</h3>
                                <p class="map_info-col__item--number"><span class="map_info-col__item--number_nation">+20</span> 01280919630</p>
                            </div>
                            <div class="map_info-col__item--assign">
                                <div class="map_info-col__item--tasksNumber">
                                    <span class="map_info-col__item--tasks_circle">0</span>
                                    <p class="map_info-col__item--task-p">Task</p>
                                </div>
                                <div class="map_info-col__item--moreInfoBtn">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-agentTab="2"
                         class="map_info-col__containar-tabAgnet map_info-col__containar-tabAgent--active">
                        <div class="map_info-col__item">
                            <div class="map_info-col__item--image">
                                <img src="assets/images/logos/defaul-profile-pic.png"
                                     alt="user name">
                                <div class="agent_activity  agent_activity--offduty"></div>
                            </div>
                            <div class="map_info-col__item--info">
                                <h3 class="map_info-col__item--name">Zeyad Mohamed</h3>
                                <p class="map_info-col__item--number"><span class="map_info-col__item--number_nation">+20</span> 01280919630</p>
                            </div>
                            <div class="map_info-col__item--assign">
                                <div class="map_info-col__item--tasksNumber">
                                    <span class="map_info-col__item--tasks_circle">0</span>
                                    <p class="map_info-col__item--task-p">Task</p>
                                </div>
                                <div class="map_info-col__item--moreInfoBtn">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function initMap() {
            var options = {
                zoom: 20,
                center: {
                    lat: 28.912616,
                    lng: 26.426906
                }
            }
            var maps = new google.maps.Map(document.querySelector(".map_container"), options)
        };
    </script>

    <script async
            defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX54Ej_pzEV3lwwK9QNmpcbMUmc-mAxug&callback=initMap">
    </script>
</body>

</html>
