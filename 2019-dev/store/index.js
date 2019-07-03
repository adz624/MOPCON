export const state = () => ({
  homePageReady: false
});

export const mutations = {
  updateHomePageReady(state, payload) {
    state.homePageReady = payload;
  }
};

export const getters = {
  homePageReady: state => state.homePageReady
};
