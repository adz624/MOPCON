import { HashRouter, Route, Routes } from "react-router-dom";
import Header from "./components/Layout/Header";
import Footer from "./components/Layout/Footer";
import HomePage from "./page/Home/HomePage";
import { lazy, Suspense } from "react";
import ScrollToTop from "./helper/ScrollToTop";
const CommunityPage = lazy(() => import("./page/Community/CommunityPage"));
const TimeMachinePage = lazy(() =>
  import("./page/TimeMachine/TimeMachinePage")
);
const SpeakerPage = lazy(() => import("./page/SpeakerPage/SpeakerPage"));
const TicketPage = lazy(() => import("./page/Ticket/TicketPage"));
const SponsorPage = lazy(() => import("./page/Sponsor/SponsorPage"));
const SchedulePage = lazy(() => import("./page/Schedule/SchedulePage"));
const UnconfPage = lazy(() => import("./page/Unconf/UnconfPage"));

function App() {
  return (
    <HashRouter>
      <Header />
      <ScrollToTop />
      <Suspense fallback={<h1>Loading...</h1>}>
        <Routes>
          <Route path="/" element={<HomePage />} />
          <Route path="/community" element={<CommunityPage />} />
          <Route path="/schedule" element={<SchedulePage />} />
          <Route path="/schedule_unconf" element={<UnconfPage />} />
          <Route path="/time-machine" element={<TimeMachinePage />} />
          <Route path="/speaker" element={<SpeakerPage />} />
          <Route path="/ticket" element={<TicketPage />} />
          <Route path="/sponsor" element={<SponsorPage />} />
        </Routes>
      </Suspense>
      <Footer />
    </HashRouter>
  );
}

export default App;
