import React from "react";
import { BrowserRouter as Router, Route, Routes, Link } from "react-router-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import { Container, Navbar, Nav } from "react-bootstrap";

const Sidebar = () => {
  return (
    <div className="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style={{ width: "250px", height: "100vh" }}>
      <h4 className="text-center">Admin Panel</h4>
      <hr />
      <ul className="nav nav-pills flex-column mb-auto">
        <li className="nav-item">
          <Link to="/" className="nav-link text-white">Dashboard</Link>
        </li>
        <li className="nav-item">
          <Link to="/users" className="nav-link text-white">Users</Link>
        </li>
        <li className="nav-item">
          <Link to="/settings" className="nav-link text-white">Settings</Link>
        </li>
      </ul>
    </div>
  );
};

const Dashboard = () => <h2>Dashboard</h2>;
const Users = () => <h2>Users Management</h2>;
const Settings = () => <h2>Settings</h2>;

const AdminLayout = ({ children }) => {
  return (
    <div className="d-flex">
      <Sidebar />
      <div className="p-4" style={{ width: "100%" }}>
        <Navbar bg="light" expand="lg" className="mb-4">
          <Container>
            <Navbar.Brand>Admin Dashboard</Navbar.Brand>
            <Nav className="ml-auto">
              <Nav.Link href="#">Profile</Nav.Link>
              <Nav.Link href="#">Logout</Nav.Link>
            </Nav>
          </Container>
        </Navbar>
        {children}
      </div>
    </div>
  );
};

const App = () => {
  return (
    <Router>
      <AdminLayout>
        <Routes>
          <Route path="/" element={<Dashboard />} />
          <Route path="/users" element={<Users />} />
          <Route path="/settings" element={<Settings />} />
        </Routes>
      </AdminLayout>
    </Router>
  );
};

export default App;
