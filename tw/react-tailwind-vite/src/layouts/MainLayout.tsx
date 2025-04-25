import Navbar from "../assets/components/Navbar";
import Footer from "../assets/components/Footer";
import { Outlet } from "react-router";

export default function MainLayout() {
  return (
    <>
        <Navbar />
        <div> <Outlet /> </div>
        <Footer />
    </>
  )
}
