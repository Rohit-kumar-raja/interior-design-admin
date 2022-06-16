<html lang="en">

<head>



</head>

<x-layout>
    @slot('body')
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block mt-4">
                            <div class="col-lg-4">
                                
                                <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-default">Default</button>
                                <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="h6 modal-title">Terms of Service</h2><button type="button"
                                                    class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>With less than a month to go before the European Union enacts new
                                                    consumer privacy laws for its citizens, companies around the world
                                                    are updating their terms of service agreements to comply.</p>
                                                <p>The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                    goes into effect on May 25 and is meant to ensure a common set of
                                                    data rights in the European Union. It requires organizations to
                                                    notify users as soon as possible of high-risk data breaches that
                                                    could personally affect them.</p>
                                            </div>
                                            <div class="modal-footer"><button type="button"
                                                    class="btn btn-secondary">Accept</button> <button type="button"
                                                    class="btn btn-link text-gray-600 ms-auto"
                                                    data-bs-dismiss="modal">Close</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"> <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>
                                <div class="modal fade" id="modal-notification" tabindex="-1"
                                    aria-labelledby="modal-notification" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
                                        <div class="modal-content bg-gradient-secondary"><button type="button"
                                                class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="modal-header">
                                                <p class="modal-title text-gray-200" id="modal-title-notification">A
                                                    new experience, personalized for you.</p>
                                            </div>
                                            <div class="modal-body text-white">
                                                <div class="py-3 text-center"><span class="modal-icon"><svg
                                                            class="icon icon-xl text-gray-200" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                                            </path>
                                                            <path
                                                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                                            </path>
                                                        </svg></span>
                                                    <h2 class="h4 modal-title my-3">Important message!</h2>
                                                    <p>Do you know that you can assign status and relation to a company
                                                        right in the visit list?</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer"><button type="button" class="btn btn-sm btn-white">Go
                                                    to Inbox</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"> <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-form">Sign In</button>
                                <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card p-3 p-lg-4"><button type="button"
                                                        class="btn-close ms-auto" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="text-center text-md-center mb-4 mt-md-0">
                                                        <h1 class="mb-0 h4">Sign in to our platform</h1>
                                                    </div>
                                                    <form action="#" class="mt-4">
                                                        <div class="form-group mb-4"><label for="email">Your
                                                                Email</label>
                                                            <div class="input-group"><span class="input-group-text"
                                                                    id="basic-addon1"><svg
                                                                        class="icon icon-xs text-gray-600"
                                                                        fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                                        </path>
                                                                        <path
                                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                                        </path>
                                                                    </svg> </span><input type="email"
                                                                    class="form-control" placeholder="example@company.com"
                                                                    id="email" autofocus="" required=""></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group mb-4"><label for="password">Your
                                                                    Password</label>
                                                                <div class="input-group"><span class="input-group-text"
                                                                        id="basic-addon2"><svg
                                                                            class="icon icon-xs text-gray-600"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                                                clip-rule="evenodd"></path>
                                                                        </svg> </span><input type="password"
                                                                        placeholder="Password" class="form-control"
                                                                        id="password" required=""></div>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-top mb-4">
                                                                <div class="form-check"><input class="form-check-input"
                                                                        type="checkbox" value="" id="remember">
                                                                    <label class="form-check-label mb-0"
                                                                        for="remember">Remember me</label></div>
                                                                <div><a href="./forgot-password.html"
                                                                        class="small text-right">Lost password?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-grid"><button type="submit"
                                                                class="btn btn-gray-800">Sign in</button></div>
                                                    </form>
                                                    <div class="mt-3 mb-4 text-center"><span class="fw-normal">or
                                                            login with</span></div>
                                                    <div class="d-flex justify-content-center my-4"><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                                            type="button" aria-label="facebook button"
                                                            title="facebook button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="facebook-f" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor"
                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                </path>
                                                            </svg> </a><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                                            type="button" aria-label="twitter button"
                                                            title="twitter button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="twitter" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor"
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg> </a><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500"
                                                            type="button" aria-label="github button"
                                                            title="github button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="github" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                                <path fill="currentColor"
                                                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                                                </path>
                                                            </svg></a></div>
                                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                                        <span class="fw-normal">Not registered? <a href="./sign-up.html"
                                                                class="fw-bold">Create
                                                                account</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"> <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-form-signup">Sign Up</button>
                                <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog"
                                    aria-labelledby="modal-form-signup" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card p-3 p-lg-4"><button type="button"
                                                        class="btn-close ms-auto" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="text-center text-md-center mb-4 mt-md-0">
                                                        <h1 class="mb-0 h4">Create Account</h1>
                                                    </div>
                                                    <form action="#" class="mt-4">
                                                        <div class="form-group mb-4"><label for="email">Your
                                                                Email</label>
                                                            <div class="input-group"><span class="input-group-text"
                                                                    id="basic-addon1"><svg
                                                                        class="icon icon-xs text-gray-600"
                                                                        fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                                        </path>
                                                                        <path
                                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                                        </path>
                                                                    </svg> </span><input type="email"
                                                                    class="form-control" placeholder="example@company.com"
                                                                    id="email" autofocus="" required=""></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group mb-4"><label for="password">Your
                                                                    Password</label>
                                                                <div class="input-group"><span class="input-group-text"
                                                                        id="basic-addon2"><svg
                                                                            class="icon icon-xs text-gray-600"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                                                clip-rule="evenodd"></path>
                                                                        </svg> </span><input type="password"
                                                                        placeholder="Password" class="form-control"
                                                                        id="password" required=""></div>
                                                            </div>
                                                            <div class="form-group mb-4"><label
                                                                    for="confirm_password">Confirm Password</label>
                                                                <div class="input-group"><span class="input-group-text"
                                                                        id="basic-addon2"><svg
                                                                            class="icon icon-xs text-gray-600"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                                                clip-rule="evenodd"></path>
                                                                        </svg> </span><input type="password"
                                                                        placeholder="Confirm Password"
                                                                        class="form-control" id="confirm_password"
                                                                        required=""></div>
                                                            </div>
                                                            <div class="mb-4">
                                                                <div class="form-check"><input class="form-check-input"
                                                                        type="checkbox" value="" id="remember">
                                                                    <label class="form-check-label fw-normal mb-0"
                                                                        for="remember">I agree to the <a href="#"
                                                                            class="fw-bold">terms and
                                                                            conditions</a></label></div>
                                                            </div>
                                                        </div>
                                                        <div class="d-grid"><button type="submit"
                                                                class="btn btn-gray-800">Sign up</button></div>
                                                    </form>
                                                    <div class="mt-3 mb-4 text-center"><span class="fw-normal">or
                                                            login with</span></div>
                                                    <div class="d-flex justify-content-center my-3"><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                                            type="button" aria-label="facebook button"
                                                            title="facebook button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="facebook-f" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor"
                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                </path>
                                                            </svg> </a><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                                            type="button" aria-label="twitter button"
                                                            title="twitter button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="twitter" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor"
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg> </a><a href="#"
                                                            class="btn btn-icon-only btn-pill btn-outline-gray-500"
                                                            type="button" aria-label="github button"
                                                            title="github button"><svg class="icon icon-xxs"
                                                                aria-hidden="true" focusable="false" data-prefix="fab"
                                                                data-icon="github" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                                <path fill="currentColor"
                                                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                                                </path>
                                                            </svg></a></div>
                                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                                        <span class="fw-normal">Already have an account? <a
                                                                href="./sign-in.html" class="fw-bold">Login
                                                                here</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"> <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-achievement">Achievement</button>
                                <div class="modal fade" id="modal-achievement" tabindex="-1"
                                    aria-labelledby="modal-achievement" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-tertiary modal-dialog-centered" role="document">
                                        <div class="modal-content"><button type="button"
                                                class="btn-close theme-settings-close fs-6 ms-auto"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="modal-header mx-auto">
                                                <p class="lead mb-0 text-white">You just unlocked a new badge</p>
                                            </div>
                                            <div class="modal-body pt-0">
                                                <div class="py-3 px-5 text-center"><span
                                                        class="modal-icon display-1 text-white"><svg
                                                            class="icon icon-lg text-gray-200" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                    <h2 class="h3 modal-title mb-3 text-white">Author Level 5</h2>
                                                    <p class="mb-4 text-white">One Thousand Dollars! Well done mate -
                                                        heads are turning your way.</p>
                                                    <div class="progress mb-0">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center pt-0 pb-3"><button
                                                    type="button" class="btn btn-sm btn-white text-tertiary"
                                                    data-bs-dismiss="modal">Awesome!</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4"> <button type="button" class="btn btn-block btn-gray-800 mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-subscribe">Subscribe</button>
                                <div class="modal fade" id="modal-subscribe" tabindex="-1"
                                    aria-labelledby="modal-subscribe" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-tertiary modal-dialog-centered modal-lg"
                                        role="document">
                                        <div class="modal-content bg-dark text-white">
                                            <div class="modal-header"><button type="button"
                                                    class="btn-close btn-close-white text-white" data-bs-dismiss="modal"
                                                    aria-label="Close"></button></div>
                                            <div class="modal-body text-center py-3"><span class="modal-icon"><svg
                                                        class="icon icon-xl text-gray-200 mb-4" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                                                            clip-rule="evenodd"></path>
                                                    </svg></span>
                                                <h3 class="modal-title mb-3">Join our 1,360,462 subscribers</h3>
                                                <p class="mb-4 lead">Get exclusive access to freebies, premium
                                                    products and news.</p>
                                                <div class="form-group px-lg-5">
                                                    <div class="d-flex mb-3 justify-content-center"><input type="text"
                                                            id="subscribe"
                                                            class="me-sm-1 mb-sm-0 form-control form-control-lg"
                                                            placeholder="example@company.com">
                                                        <div><button type="submit"
                                                                class="ms-2 btn large-form-btn btn-secondary">Subscribe</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer z-2 mx-auto text-center">
                                                <p class="text-white font-small">We’ll never share your details with
                                                    third parties.<br class="visible-md">View our <a
                                                        href="#">Privacy Policy</a> for more info.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
            <div class="card-body bg-gray-800 text-white pt-4"><button type="button"
                    class="btn-close theme-settings-close collapsed" aria-label="Close" data-bs-toggle="collapse"
                    href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span>
                    </p><span></span>
                </div><a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
                    class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">Download
                    <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                            clip-rule="evenodd"></path>
                    </svg></a>
                <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
                <div class="d-flex justify-content-center"><a class="me-3"
                        href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                        target="_blank"><img src="assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                    </a><a class="me-3" href="https://themesberg.com/product/dashboard/volt-react" target="_blank"><img
                            src="assets/img/technologies/react-logo.svg" class="image image-xs"> </a><a
                        href="https://themesberg.com/product/laravel/volt-admin-dashboard-template" target="_blank"><img
                            src="assets/img/technologies/laravel-logo.svg" class="image image-xs"></a></div>
            </div>
        </div>
        <div class="card theme-settings bg-gray-800 theme-settings-expand show" id="theme-settings-expand">
            <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2"><span
                    class="fw-bold d-inline-flex align-items-center h6"><svg class="icon icon-xs me-2"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"></path>
                    </svg> Settings</span></div>
        </div>
        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year">2022</span> <a
                            class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a>
                    </p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                        <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/about">About</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/themes">Themes</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/blog">Blog</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        </main>
    @endslot
</x-layout>
