@extends('tpages.layouts.main')

@push('body')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>"Create Solutions"</p>
						<h1>Explore</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="problem-statements-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="problem-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".software">Software</li>
                            <li data-filter=".hardware">Hardware</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row problem-lists">
                <!-- Software Problem Statement 1 -->
                <div class="col-lg-4 col-md-6 text-center software">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/software-icon1.png" alt="Software Problem 1"></a> -->
                        </div>
                        <h3>AI-Based Campus Navigation</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-laptop-code"></i> Software</span>
                        </p>
                        <p class="excerpt">Develop an AI-driven application to assist students in navigating the campus efficiently, integrating real-time data and user preferences.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
                <!-- Hardware Problem Statement 1 -->
                <div class="col-lg-4 col-md-6 text-center hardware">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/hardware-icon1.png" alt="Hardware Problem 1"></a> -->
                        </div>
                        <h3>Smart Classroom Automation</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-microchip"></i> Hardware</span>
                        </p>
                        <p class="excerpt">Design and implement a hardware solution to automate classroom functionalities such as lighting, temperature control, and attendance tracking.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
                <!-- Software Problem Statement 2 -->
                <div class="col-lg-4 col-md-6 text-center software">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/software-icon2.png" alt="Software Problem 2"></a> -->
                        </div>
                        <h3>Campus Event Management System</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-code"></i> Software</span>
                        </p>
                        <p class="excerpt">Create a comprehensive event management platform that streamlines event creation, registration, and feedback collection for campus activities.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
                <!-- Hardware Problem Statement 2 -->
                <div class="col-lg-4 col-md-6 text-center hardware">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/hardware-icon2.png" alt="Hardware Problem 2"></a> -->
                        </div>
                        <h3>Energy-Efficient Smart Lighting</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-lightbulb"></i> Hardware</span>
                        </p>
                        <p class="excerpt">Develop a smart lighting system that optimizes energy consumption in campus buildings through motion detection and ambient light sensors.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
                <!-- Software Problem Statement 3 -->
                <div class="col-lg-4 col-md-6 text-center software">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/software-icon3.png" alt="Software Problem 3"></a> -->
                        </div>
                        <h3>Virtual Reality Learning Modules</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-vr-cardboard"></i> Software</span>
                        </p>
                        <p class="excerpt">Create immersive VR modules for enhanced learning experiences in subjects like biology, chemistry, and engineering.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
                <!-- Hardware Problem Statement 3 -->
                <div class="col-lg-4 col-md-6 text-center hardware">
                    <div class="single-problem-item">
                        <div class="problem-icon">
                            <!-- <a href="single-problem.html"><img src="assets/img/problems/hardware-icon3.png" alt="Hardware Problem 3"></a> -->
                        </div>
                        <h3>Automated Attendance System</h3>
                        <p class="problem-meta">
                            <span class="category"><i class="fas fa-user-check"></i> Hardware</span>
                        </p>
                        <p class="excerpt">Implement a biometric-based attendance system that accurately records student attendance and integrates with the academic database.</p>
                        <a href="/register" class="register-btn"><i class="fas fa-registered"></i> Register</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- CSS Styling (Ensure to include or adjust based on your existing styles) -->
<style>
    .problem-statements-section .problem-filters ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }
    .problem-filters ul li {
        margin: 0 10px;
        cursor: pointer;
        padding: 10px 20px;
        background-color: #f8f8f8;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .problem-filters ul li.active,
    .problem-filters ul li:hover {
        background-color: #ff9800;
        color: #fff;
    }
    .single-problem-item {
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        transition: box-shadow 0.3s;
        background-color: #fff;
    }
    .single-problem-item:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .problem-icon img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        margin-bottom: 15px;
    }
    .problem-text-box h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    .problem-meta .category {
        font-size: 0.9rem;
        color: #757575;
    }
    .excerpt {
        font-size: 1rem;
        color: #616161;
        margin: 15px 0;
    }
    .register-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff9800;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .register-btn:hover {
        background-color: #e68900;
    }
    .pagination-wrap ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }
    .pagination-wrap ul li {
        margin: 0 5px;
    }
    .pagination-wrap ul li a {
        padding: 8px 16px;
        background-color: #f1f1f1;
        color: #333;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .pagination-wrap ul li a.active,
    .pagination-wrap ul li a:hover {
        background-color: #ff9800;
        color: #fff;
    }
</style>

	<!-- end products -->
@endpush