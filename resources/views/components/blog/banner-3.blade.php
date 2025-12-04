        <div class="zol-banner zol-banner--blog t-pt-150 t-pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mt-0 t-text-light text-capitalize">

                            {{ $data->title }}
                        </h2>
                        <ul
                            class="t-list breadcrumbs d-flex justify-content-center align-items-center"
                        >
                            <li class="breadcrumbs__list">
                                <a
                                    href="{{ route('home')}}"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    home
                                </a>
                            </li>
                            <li class="breadcrumbs__list">
                                <a
                                    href="{{ route('blog')}}"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    blog
                                </a>
                            </li>
                            <li class="breadcrumbs__list">
                                <a
                                    href="#"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    {{ $data->title }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>