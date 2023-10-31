import { HashRouter, BrowserRouter, Route, Routes } from "react-router-dom";
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
    <BrowserRouter>
      <Header />
      <ScrollToTop />
      <Suspense fallback={<h1>Loading...</h1>}>
        <Routes>
          <Route path="/2023/" element={<HomePage />} />
          <Route path="/2023/community/" element={<CommunityPage />} />
          <Route path="/2023/schedule/" element={<SchedulePage />} />
          <Route path="/2023/schedule_unconf/" element={<UnconfPage />} />
          <Route path="/2023/time-machine/" element={<TimeMachinePage />} />
          <Route path="/2023/speaker/" element={<SpeakerPage />} />
          <Route path="/2023/ticket/" element={<TicketPage />} />
          <Route path="/2023/sponsor/" element={<SponsorPage />} />
        </Routes>
      </Suspense>
      <Footer />
    </BrowserRouter>
  );
}

export default App;
