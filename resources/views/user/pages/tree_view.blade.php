@extends('user.main')

@section('content')
<div class="container-fluid mt-4" style="max-width: 986px;">
    <!-- Header Section -->
    <div class="header-section">
        <h2 class="page-title">
            <i class="fas fa-sitemap"></i>
            Network Tree View
        </h2>
        <p class="page-subtitle">Visualize your network structure</p>
    </div>

    <!-- Stats & Search Section -->
    <div class="row mb-4">
        <div class="col-lg-8">
            <div class="stats-card">
                <div class="user-info-section">
                    <div class="user-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="user-details">
                        <h4>{{ $user->full_name ?? 'N/A' }}</h4>
                        <p>ID: {{ $user->username ?? 'N/A' }}</p>
                    </div>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item left-stat">
                        <div class="stat-icon">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="stat-content">
                            <h3>{{ $left_members ?? 0 }}</h3>
                            <p>Left Members</p>
                            <small>{{ number_format($left_amount ?? 0) }}</small>
                        </div>
                    </div>
                    
                    <div class="stat-divider"></div>
                    
                    <div class="stat-item right-stat">
                        <div class="stat-icon">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="stat-content">
                            <h3>{{ $right_members ?? 0 }}</h3>
                            <p>Right Members</p>
                            <small>{{ number_format($right_amount ?? 0) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="search-card">
                <form class="search-form" method="get" action="{{ route('tree_view') }}">
                    <div class="search-input-group">
                        <input type="text" name="member_id" style="width: 12px;" class="search-input" placeholder="Enter Member ID">
                        <button class="search-btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tree Structure -->
    <div class="tree-container">
        <div class="tree-wrapper">
            <!-- Root Node -->
            <div class="tree-level level-0">
                <div class="tree-node root-node" data-tooltip="Root User">
                    <div class="node-avatar root-avatar">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="node-content">
                        <h5>{{ $user->full_name ?? 'N/A' }}</h5>
                        <p>{{ $user->username ?? 'N/A' }}</p>
                    </div>
                    <div class="node-status online"></div>
                </div>
            </div>

            <!-- Connection Lines -->
            <div class="tree-connections">
                <div class="main-line"></div>
                <div class="branch-lines">
                    <div class="branch-line left-line"></div>
                    <div class="branch-line right-line"></div>
                </div>
            </div>

            <!-- Level 1 Nodes -->
            <div class="tree-level level-1">
                <!-- Left Child -->
                <div class="tree-node child-node left-child" data-tooltip="Left Branch">
                    @if($left_user)
                        <div class="node-avatar left-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="node-content">
                            <h6>{{ $left_user->full_name }}</h6>
                            <p>{{ $left_user->username }}</p>
                        </div>
                        <div class="node-status online"></div>
                    @else
                        <div class="node-avatar empty-avatar">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="node-content">
                            <p>Available</p>
                        </div>
                        <div class="node-status empty"></div>
                    @endif
                </div>

                <!-- Right Child -->
                <div class="tree-node child-node right-child" data-tooltip="Right Branch">
                    @if($right_user)
                        <div class="node-avatar right-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="node-content">
                            <h6>{{ $right_user->full_name }}</h6>
                            <p>{{ $right_user->username }}</p>
                        </div>
                        <div class="node-status online"></div>
                    @else
                        <div class="node-avatar empty-avatar">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="node-content">
                            <p>Available</p>
                        </div>
                        <div class="node-status empty"></div>
                    @endif
                </div>
            </div>

            <!-- Level 2 Connections -->
            <div class="tree-connections level-2-connections">
                <div class="sub-branch-lines">
                    <div class="sub-branch left-sub">
                        <div class="sub-line"></div>
                        <div class="sub-branches">
                            <div class="sub-branch-line"></div>
                            <div class="sub-branch-line"></div>
                        </div>
                    </div>
                    <div class="sub-branch right-sub">
                        <div class="sub-line"></div>
                        <div class="sub-branches">
                            <div class="sub-branch-line"></div>
                            <div class="sub-branch-line"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Level 2 Nodes -->
            <div class="tree-level level-2">
                <!-- Left-Left Child -->
                <div class="tree-node grandchild-node" data-tooltip="Left-Left Branch">
                    @if($left_left_user)
                        <div class="node-avatar left-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="node-content">
                            <h6>{{ $left_left_user->full_name }}</h6>
                            <p>{{ $left_left_user->username }}</p>
                        </div>
                        <div class="node-status online"></div>
                    @else
                        <div class="node-avatar empty-avatar">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="node-content">
                            <p>Available</p>
                        </div>
                        <div class="node-status empty"></div>
                    @endif
                </div>

                <!-- Left-Right Child (Empty) -->
                <div class="tree-node grandchild-node" data-tooltip="Left-Right Branch">
                    <div class="node-avatar empty-avatar">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="node-content">
                        <p>Available</p>
                    </div>
                    <div class="node-status empty"></div>
                </div>

                <!-- Right-Left Child (Empty) -->
                <div class="tree-node grandchild-node" data-tooltip="Right-Left Branch">
                    <div class="node-avatar empty-avatar">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="node-content">
                        <p>Available</p>
                    </div>
                    <div class="node-status empty"></div>
                </div>

                <!-- Right-Right Child -->
                <div class="tree-node grandchild-node" data-tooltip="Right-Right Branch">
                    @if($right_right_user)
                        <div class="node-avatar right-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="node-content">
                            <h6>{{ $right_right_user->full_name }}</h6>
                            <p>{{ $right_right_user->username }}</p>
                        </div>
                        <div class="node-status online"></div>
                    @else
                        <div class="node-avatar empty-avatar">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="node-content">
                            <p>Available</p>
                        </div>
                        <div class="node-status empty"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Global Styles */
* {
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Section */
.header-section {
    text-align: center;
    margin-bottom: 2rem;
    padding: 2rem 0;
}

.page-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.page-title i {
    margin-right: 1rem;
    color: #3498db;
}

.page-subtitle {
    color: #7f8c8d;
    font-size: 1.1rem;
    margin: 0;
}

/* Stats Card */
.stats-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid #e9ecef;
    animation: slideInLeft 0.6s ease-out;
}

.user-info-section {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e9ecef;
}

.user-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(45deg, #3498db, #5dade2);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.user-avatar i {
    font-size: 2rem;
    color: #fff;
}

.user-details h4 {
    color: #2c3e50;
    margin: 0 0 0.25rem 0;
    font-weight: 600;
}

.user-details p {
    color: #7f8c8d;
    margin: 0;
    font-size: 0.9rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    gap: 1.5rem;
    align-items: center;
}

.stat-item {
    display: flex;
    align-items: center;
    padding: 1rem;
    border-radius: 15px;
    background: #f8f9fa;
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.stat-item:hover {
    transform: translateY(-2px);
}

.left-stat {
    background: linear-gradient(135deg, #d5f4e6 0%, #fafffe 100%);
    border-color: #27ae60;
}

.right-stat {
    background: linear-gradient(135deg, #fce4ec 0%, #fafffe 100%);
    border-color: #e74c3c;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.2rem;
    color: #fff;
}

.left-stat .stat-icon {
    background: linear-gradient(45deg, #27ae60, #58d68d);
}

.right-stat .stat-icon {
    background: linear-gradient(45deg, #e74c3c, #ec7063);
}

.stat-content h3 {
    color: #2c3e50;
    margin: 0 0 0.25rem 0;
    font-size: 1.8rem;
    font-weight: 700;
}

.stat-content p {
    color: #5d6d7e;
    margin: 0 0 0.25rem 0;
    font-size: 0.9rem;
}

.stat-content small {
    color: #85929e;
    font-size: 0.8rem;
}

.stat-divider {
    width: 2px;
    height: 60px;
    background: linear-gradient(to bottom, transparent, #bdc3c7, transparent);
}

/* Search Card */
.search-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid #e9ecef;
    animation: slideInRight 0.6s ease-out;
}

.search-input-group {
    display: flex;
    background: #f8f9fa;
    border-radius: 50px;
    overflow: hidden;
    border: 1px solid #e9ecef;
}

.search-input {
    flex: 1;
    padding: 1rem 1.5rem;
    background: transparent;
    border: none;
    color: #2c3e50;
    font-size: 1rem;
    outline: none;
}

.search-input::placeholder {
    color: #95a5a6;
}

.search-btn {
    padding: 1rem 1.5rem;
    background: linear-gradient(45deg, #3498db, #5dade2);
    border: none;
    color: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-btn:hover {
    background: linear-gradient(45deg, #2980b9, #3498db);
    transform: scale(1.05);
}

/* Tree Container */
.tree-container {
    display: flex;
    justify-content: center;
    padding: 2rem 0;
    min-height: 600px;
}

.tree-wrapper {
    position: relative;
    width: 100%;
    max-width: 1200px;
    animation: fadeInUp 0.8s ease-out;
}

/* Tree Levels */
.tree-level {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 2rem 0;
}

.level-1 {
    justify-content: space-between;
    max-width: 600px;
    margin: 0 auto;
}

.level-2 {
    justify-content: space-between;
    max-width: 800px;
    margin: 0 auto;
}

/* Tree Nodes */
.tree-node {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1.5rem;
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
    cursor: pointer;
    min-width: 150px;
}

.tree-node:hover {
    transform: translateY(-5px);
}

.root-node {
    background: linear-gradient(145deg, #fff9c4 0%, #ffffff 100%);
    border: 2px solid #f39c12;
    transform: scale(1.1);
}

.child-node {
    background: linear-gradient(145deg, #e8f5e8 0%, #ffffff 100%);
    border-color: #27ae60;
}

.grandchild-node {
    background: linear-gradient(145deg, #e3f2fd 0%, #ffffff 100%);
    border-color: #3498db;
    transform: scale(0.9);
}

/* Node Avatars */
.node-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #fff;
}

.root-avatar {
    background: linear-gradient(45deg, #f39c12, #f5b041);
}

.left-avatar {
    background: linear-gradient(45deg, #27ae60, #58d68d);
}

.right-avatar {
    background: linear-gradient(45deg, #e74c3c, #ec7063);
}

.empty-avatar {
    background: linear-gradient(45deg, #95a5a6, #bdc3c7);
    opacity: 0.7;
}

/* Node Content */
.node-content {
    text-align: center;
}

.node-content h5 {
    color: #2c3e50;
    margin: 0 0 0.25rem 0;
    font-size: 1.1rem;
    font-weight: 600;
}

.node-content h6 {
    color: #2c3e50;
    margin: 0 0 0.25rem 0;
    font-size: 1rem;
    font-weight: 500;
}

.node-content p {
    color: #7f8c8d;
    margin: 0;
    font-size: 0.85rem;
}

/* Node Status */
.node-status {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid #fff;
}

.node-status.online {
    background: #27ae60;
    box-shadow: 0 0 8px rgba(39, 174, 96, 0.6);
}

.node-status.empty {
    background: #95a5a6;
    opacity: 0.5;
}

/* Tree Connections */
.tree-connections {
    position: relative;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-line {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 25px;
    background: linear-gradient(to bottom, #bdc3c7, #95a5a6);
    border-radius: 2px;
}

.branch-lines {
    position: absolute;
    top: 25px;
    left: 50%;
    transform: translateX(-50%);
    width: 300px;
    height: 25px;
    display: flex;
    justify-content: space-between;
}

.branch-line {
    width: 3px;
    height: 100%;
    background: linear-gradient(to bottom, #95a5a6, #bdc3c7);
    border-radius: 2px;
}

.branch-line::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 3px;
    background: linear-gradient(to right, #95a5a6, #bdc3c7, #95a5a6);
    border-radius: 2px;
}

.left-line {
    transform: translateX(-50%);
}

.right-line {
    transform: translateX(50%);
}

/* Level 2 Connections */
.level-2-connections {
    height: 40px;
}

.sub-branch-lines {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    max-width: 600px;
}

.sub-branch {
    position: relative;
    width: 200px;
    height: 100%;
}

.sub-line {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 20px;
    background: linear-gradient(to bottom, #bdc3c7, #95a5a6);
    border-radius: 2px;
}

.sub-branches {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 20px;
    display: flex;
    justify-content: space-between;
}

.sub-branch-line {
    width: 3px;
    height: 100%;
    background: linear-gradient(to bottom, #95a5a6, #bdc3c7);
    border-radius: 2px;
}

.sub-branches::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(to right, #95a5a6, #bdc3c7, #95a5a6);
    border-radius: 2px;
}

/* Tooltips */
.tree-node::before {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(44, 62, 80, 0.9);
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-size: 0.8rem;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
}

.tree-node::after {
    content: '';
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    border: 5px solid transparent;
    border-top-color: rgba(44, 62, 80, 0.9);
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.tree-node:hover::before,
.tree-node:hover::after {
    opacity: 1;
    visibility: visible;
    bottom: calc(100% + 10px);
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .stat-divider {
        display: none;
    }
    
    .tree-node {
        min-width: 120px;
        padding: 1rem;
    }
    
    .node-avatar {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
    
    .level-1, .level-2 {
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .page-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .stats-card, .search-card {
        padding: 1.5rem;
    }
    
    .tree-node {
        min-width: 100px;
        padding: 0.75rem;
    }
    
    .node-content h5, .node-content h6 {
        font-size: 0.9rem;
    }
    
    .node-content p {
        font-size: 0.75rem;
    }
}
</style>
@endsection