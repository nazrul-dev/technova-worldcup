import "../styles/globals.css";
import { Dosis } from '@next/font/google'
import "react-toastify/dist/ReactToastify.css";
import { ToastContainer } from "react-toastify";
const dosis = Dosis({ subsets: ["latin"] });
function MyApp({ Component, pageProps }) {
  return (
    <main className={dosis.className}>
       <ToastContainer
        toastClassName={"text-center block z-[999999]"}
        closeButton={false}
        pauseOnHover={false}
        style={{ width: "auto" }}
      />
      <Component {...pageProps} />
    </main>
  );
}

export default MyApp;
