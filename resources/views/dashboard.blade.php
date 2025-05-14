<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css" />
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  display: flex;
  min-height: 100vh;
  background-color: #f4f7fa;
}

/* Sidebar */
.sidebar {
  width: 220px;
  background: #343a40;
  color: #fff;
  padding: 20px;
  min-height: 100vh;
}

.sidebar h2 {
  margin-bottom: 20px;
  font-size: 24px;
}

.sidebar ul {
  list-style: none;
}

.sidebar ul li {
  margin-bottom: 15px;
}

.sidebar ul li a {
  text-decoration: none;
  color: #ccc;
  display: block;
  padding: 8px;
  border-radius: 4px;
}

.sidebar ul li a:hover {
  background: #495057;
  color: #fff;
}

/* Main content */
.main-content {
  flex: 1;
  padding: 20px;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
}

header h1 {
  font-size: 28px;
}

.user-info {
  font-size: 16px;
  color: #333;
}

/* Cards */
.cards {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
}

.card {
  flex: 1;
  padding: 20px;
  background: #fff;
  border-left: 5px solid #007bff;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.card h3 {
  margin-bottom: 10px;
  font-size: 18px;
  color: #333;
}

.card p {
  font-size: 24px;
  color: #007bff;
}

/* Table Section */
.overview h2 {
  margin-bottom: 15px;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  border-radius: 8px;
  overflow: hidden;
}

thead {
  background: #007bff;
  color: #fff;
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background: #f1f1f1;
}

</style>
<body>

  <div class="sidebar">
    <h2>User Panel</h2>
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="{{ route('account.logout') }}">Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
      <h1>User Dashboard</h1>
      <div class="user-info">
        <span>Welcome, {{Auth::user()->name}}</span>
      </div>
    </header>

    <div class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p>1,245</p>
      </div>
      <div class="card">
        <h3>Active Sessions</h3>
        <p>112</p>
      </div>
      <div class="card">
        <h3>Reports</h3>
        <p>36</p>
      </div>
    </div>

    <section class="overview">
      <h2>Recent Activity</h2>
      <table>
        <thead>
          <tr>
            <th>User</th>
            <th>Activity</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>Logged In</td>
            <td>May 13, 2025</td>
          </tr>
          <tr>
            <td>Jane Smith</td>
            <td>Updated Profile</td>
            <td>May 13, 2025</td>
          </tr>
          <tr>
            <td>Alex Johnson</td>
            <td>Logged Out</td>
            <td>May 13, 2025</td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>

</body>
</html>
