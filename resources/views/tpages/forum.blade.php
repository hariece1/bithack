@extends('tpages.layouts.main')

@push('body')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Share Knowledge, Collaborate, and Grow</p>
						<h1>Hackathon Forum</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- forum section -->
    <div class="forum-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum-threads">
                        <h2>Discussion Threads</h2>
                        <div class="thread-item">
                            <h3><a href="#">Getting Started with Hackathon</a></h3>
                            <p>Posted by: John Doe | 5 comments | Last updated: 2 hours ago</p>
                        </div>
                        <div class="thread-item">
                            <h3><a href="#">Best Tools for Collaboration</a></h3>
                            <p>Posted by: Jane Smith | 8 comments | Last updated: 1 day ago</p>
                        </div>
                        <div class="thread-item">
                            <h3><a href="#">How to Pitch Your Idea</a></h3>
                            <p>Posted by: Alex Brown | 3 comments | Last updated: 3 days ago</p>
                        </div>
                        <div class="thread-item">
                            <h3><a href="#">Troubleshooting Coding Issues</a></h3>
                            <p>Posted by: Chris Lee | 12 comments | Last updated: 5 hours ago</p>
                        </div>
                        <div class="thread-item">
                            <h3><a href="#">Team Building Strategies</a></h3>
                            <p>Posted by: Sarah Johnson | 7 comments | Last updated: 2 days ago</p>
                        </div>
                        <div class="thread-item">
                            <h3><a href="#">Finalizing Your Project</a></h3>
                            <p>Posted by: David Kim | 6 comments | Last updated: 4 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="forum-sidebar">
                        <div class="create-thread-box">
                            <h4>Start a New Discussion</h4>
                            <form action="create_thread.html" method="post">
                                <input type="text" placeholder="Thread Title" required>
                                <textarea placeholder="Your Message" rows="5" required></textarea>
                                <button type="submit" class="btn btn-primary">Post Thread</button>
                            </form>
                        </div>
                        <div class="popular-topics-box">
                            <h4>Popular Topics</h4>
                            <ul>
                                <li><a href="#">Introduction to BIT Hackathon</a></li>
                                <li><a href="#">Resource Sharing</a></li>
                                <li><a href="#">Pitching Best Practices</a></li>
                                <li><a href="#">Successful Project Stories</a></li>
                                <li><a href="#">Code Troubleshooting Tips</a></li>
                            </ul>
                        </div>
                        <div class="forum-rules-box">
                            <h4>Forum Rules</h4>
                            <p>Please be respectful, stay on topic, and remember to collaborate effectively. Any inappropriate behavior will not be tolerated.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end forum section -->
@endpush