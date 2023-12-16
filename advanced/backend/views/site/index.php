<?php
/**
 *  Team: BOSHATEAM
 *  Coding by Su YuJia 2112847
 *            2023/2/4
 *  new backend's index.php
 */
/**
 *  Team: BOSHATEAM
 *  Coding by Luo Xinke 2112893
 *            2023/2/10
 *  Create backend
 */

/** @var yii\web\View $this */
use backend\models\TeamMembers;
use yii\bootstrap5\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>BOSHATEAM: Nuclear Contamination Backend Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<link rel="stylesheet" href="font.css">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a>
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="#">BOSHATEAM</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a class="btn btn-primary">Edit Profile</a>
								<a class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">TeamMemberss</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<h3 style="color:white;font-size:25px;">
							BOSHATEAM 
						</h3>
						
					
					</div>
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">课程作业</span>
						</a>
						<ul>
							<li>
								<a href="data/team/BOSHATEAM_需求文档(2113601_2112893_2112847_2111065).pdf">
									<span class="title">BOSHATEAM_需求文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/BOSHATEAM_设计文档(2113601_2112893_2112847_2111065).pdf">
									<span class="title">BOSHATEAM_设计文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/BOSHATEAM_实现文档(2113601_2112893_2112847_2111065).pdf">
									<span class="title">BOSHATEAM_实现文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/BOSHATEAM_用户手册(2113601_2112893_2112847_2111065).pdf">
									<span class="title">BOSHATEAM_用户手册</span>
								</a>
							</li>
							<li>
								<a href="data/team/BOSHATEAM_部署文档(2113601_2112893_2112847_2111065).pdf">
									<span class="title">BOSHATEAM_部署文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/BOSHATEAM_项目展示(2113601_2112893_2112847_2111065).pptx">
									<span class="title">BOSHATEAM_项目展示PPT</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业1-Web前端初探</span>
						</a>
						<ul>
						<li>
								<a href="data/personal/作业1(2112893_杨淇).zip">
									<span class="title">杨淇(2112893) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业2-Web前端设计</span>
						</a>
						<ul>
							<li>
								<a href="data/personal/作业2(2112893_杨淇).zip">
									<span class="title">杨淇(2112893) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业3开源建站工具初试文档</span>
						</a>
						<ul>
						<li>
								<a href="data/personal/作业3(2112893_杨淇).zip">
									<span class="title">杨淇(2112893) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="index.php?r=team-members">
							<i class="linecons-star"></i>
							<span class="title">小组成员信息管理</span>
						</a>
					</li>
					<li>
						<a href="index.php?r=suggestion">
							<i class="linecons-star"></i>
							<span class="title">评论管理</span>
						</a>
					</li>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
							
						<ul class="dropdown-menu TeamMemberss">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
								
									
								</ul>
								
							</li>
							
							<li class="external">
								<a href="blank-sidebar.html">
									<span>All TeamMemberss</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
							
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
									<?= Html::a('Logout', ['site/logout']) ?>
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
					
				</ul>
				
			</nav>
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Nuclear Contamination</h1>
					<p class="description">南开大学计算机互联网数据库开发课程项目</p>
					<p class="description">Nankai University Internet Database Development Course Project for Computer Science and Technology</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href=#><i class="fa-home"></i>Home</a>
						</li>
								<li>
						
										<a href="index.php?r=team-members">Members</a>
								</li>
								<li>
						
										<a href="index.php?r=suggestion">Suggestions</a>
								</li>
								</ol>
								
				</div>
					
			</div>
				
<!-- card -->
<div class="card bg-primary text-white shadow-primary card-h-100">
    <!-- card body -->
    <div class="card-body p-0">
        <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="text-center p-4">
                        <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                        <div class="avatar-md m-auto">
                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                <i class="mdi mdi-currency-btc"></i>
                            </span>
                        </div>
                        <h4 class="mt-3 lh-base fw-normal text-white"><b>核废水污染</b></h4>
                        <p class="text-white-50 font-size-13"> 核废水污染问题在全球范围内一直是环境保护和公共安全的热点议题。核废水通常含有放射性核素，如铀、钚以及其他放射性同位素，这些物质具有长半衰期，对环境和生物体造成的影响可能持续数百甚至数千年。一旦这些放射性物质通过废水排放进入生态系统，它们可以通过土壤、水体积累，并通过食物链最终对人类健康造成威胁。因此，核废水的安全处理和管理是一个极为重要的环节。

从技术层面来说，核废水处理的方法多种多样，包括物理沉淀、化学沉淀、离子交换、反渗透和蒸发等。这些方法旨在将放射性物质从废水中分离出来，以减少其对环境的影响。然而，这些处理方法不仅成本高昂，而且产生的放射性废物仍然需要安全存储或处置。核废物的最终处置通常涉及深地层存储或稳定化处理，以确保放射性物质不会重新进入环境。 </p>
                                                                
                    </div>
                </div>
				<div class="carousel-item">
                    <div class="text-center p-4">
                	    <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                        <div class="avatar-md m-auto">
                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                <i class="mdi mdi-ethereum"></i>
                        	</span>
                        </div>
						<!-- <h4 class="mt-3 lh-base fw-normal text-white"><b>互联网数据库开发</b> </h4>
						<p class="text-white-50 font-size-13"> 
						数据库技术是信息系统的一个核心技术。是一种计算机辅助管理数据的方法，它研究如何组织和存储数据，如何高效地获取和处理数据。是通过研究数据库的结构、存储、设计、管理以及应用的基本理论和实现方法，并利用这些理论来实现对数据库中的数据进行处理、分析和理解的技术。
						
						Web 开发是为 Internet 或 Intranet 构建和维护网站的过程，该网站可通过 Web 浏览器访问并托管在本地硬件或云中的服务器上。这包括从单个纯文本网页到复杂 Web 应用程序的所有内容。开发网站时的主要方法包括编码和网络标记。然而，还有许多开发任务也涉及到 Web 开发，例如脚本、安全配置、内容开发和电子商务基础设施。
						
					

						</p> -->
					</div>
                </div>
    
                <div class="carousel-item">
                    <div class="text-center p-4">
                	    <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                        <div class="avatar-md m-auto">
                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                <i class="mdi mdi-ethereum"></i>
                        	</span>
                        </div>
                        <h4 class="mt-3 lh-base fw-normal text-white"><b>nuclear wastewater pollution</b> </h4>
                        <p class="text-white-50 font-size-13"> 
						The issue of nuclear wastewater pollution has long been a hot topic of environmental protection and public safety on a global scale. Nuclear wastewater often contains radioactive nuclides, such as uranium, plutonium, and other radioactive isotopes, which have long half-lives and can have long-lasting and far-reaching impacts on the environment and biological bodies. Once these radioactive substances are discharged into the ecosystem through wastewater, they can accumulate through soil and water bodies and eventually pose a threat to human health through the food chain. Therefore, the safe treatment and management of nuclear wastewater is an extremely important link.
						</p>
                                                                
                    </div>
                </div>
				
				<div class="carousel-item">
                    <div class="text-center p-4">
                	    <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                        <div class="avatar-md m-auto">
                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                <i class="mdi mdi-ethereum"></i>
                        	</span>
                        </div>
						<!-- <h4 class="mt-3 lh-base fw-normal text-white"><b>Internet Database Development</b> </h4>
						<p class="text-white-50 font-size-13"> 
						Database technology is a core technology of information systems. It is a computer-aided approach to managing data, which examines how data is organised and stored, and how it can be accessed and processed efficiently. It is a technology that processes, analyses and understands the data in a database by studying the basic theory and implementation methods of database structure, storage, design, management and application, and using these theories to realise the data in the database.

						Web development is the process of building and maintaining a website for the Internet or Intranet that is accessible through a web browser and hosted on local hardware or on a server in the cloud. This includes everything from a single plain text web page to a complex web application. The main methods used when developing a website include coding and web markup. However, there are many other development tasks that also involve web development, such as scripting, security configuration, content development and e-commerce infrastructure.


						</p> -->
					</div>
                </div>
            <!-- end carousel-item -->
            </div>
        </div>
    <!-- end carousel -->
    </div>
    <!-- end card body -->
</div>
<!-- end card -->







			
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2023 
						<strong>BOSHATEAM</strong> 
						已把源代码上传到了Github，大家可以通过如下地址下载： <a href="https://github.com/TwinIsland-CCC/404-R-U-war" target="_blank" title=" ">GitHub链接</a> 
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<!-- start: Chat Section -->
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This TeamMembers is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your TeamMembers"></textarea>
				</div>
				
			</div>
			
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
	
	
	



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/jvectormap/regions/jquery-jvectormap-it-mill-en.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>