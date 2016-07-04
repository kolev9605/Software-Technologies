(function () {
    let baseUrl = "https://baas.kinvey.com";
    let appKey = "kid_r1G8T1EL";
    let appSecret = "474357f1b00244bd8f0e417d9657e30c";
    let _guestCredentials = "e1da9136-96e2-4153-9251-d3795d7e2474.ho0HkiSY74HRKARADavdM12KWFvJCUZRgWA3LrYRxX0=";
    let selector = ".wrapper";
    let mainContentSelector = ".main-content";

    let authService = new AuthorizationService(baseUrl,
        appKey,
        appSecret,
        _guestCredentials);

    authService.initAuthorizationType("Kinvey");
    let requester = new Requester(authService);

    let homeView = new HomeView(selector, mainContentSelector);
    let homeController = new HomeController(homeView, requester, baseUrl, appKey);

    let userView = new UserView(selector, mainContentSelector);
    let userController = new UserController(userView, requester, baseUrl, appKey);

    let postView = new PostView(selector, mainContentSelector);
    let postController = new PostController(postView, requester,baseUrl,appKey);

    initEventServices();

    onRoute("#/", function () {
        if(!authService.isLoggedIn()) {
            homeController.showGuestPage();
        } else {
            homeController.showUserPage();
        }
    });

    onRoute("#/post-:id", function () {
        let top = $("#post-" + this.params['id']).position().top;
        $(window).scrollTop(top);
    });

    onRoute("#/login", function () {
        userController.showLoginPage(authService.isLoggedIn());
    });

    onRoute("#/register", function () {
        userController.showRegisterPage(authService.isLoggedIn());
    });

    onRoute("#/logout", function () {
        userController.logout();
    });

    onRoute('#/posts/create', function () {
        let data = {
            fullName: sessionStorage['fullName']
        };

        postController.showCreatePostPage(data, authService.isLoggedIn())
    });

    bindEventHandler('login', function (ev, data) {
        userController.login(data);
    });

    bindEventHandler('register', function (ev, data) {
        userController.register(data);
    });

    bindEventHandler('createPost', function (ev, data) {
        postController.createPost(data);
    });

    run('#/');
})();
