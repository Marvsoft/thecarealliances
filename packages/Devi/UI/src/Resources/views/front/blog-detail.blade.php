@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Blog Deatil</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi aperiam aliquam velit dolorem
                    ducimus
                    provident? Minus aliquid ab eos veniam expedita? Non quam quos sed at odio temporibus perspiciatis.
                </p>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class=" entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="./assets/imgs/blog-3.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">TechToday - Your Ultimate Tech Blog</a>
                    </h2>


                    <div class="entry-content">
                        <p>
                            Welcome to TechToday, your go-to source for the latest tech news, product reviews, and
                            insights into the ever-evolving world of technology! Our team of tech enthusiasts is
                            dedicated to keeping you informed and entertained with informative articles and
                            easy-to-understand guides. Whether you're a seasoned tech guru or just dipping your toes
                            into the digital realm, we've got something for everyone! Let's dive into the exciting world
                            of tech together.
                        </p>

                        <p>
                            In this article, we explore how smart homes are transforming the way we live. From
                            voice-controlled assistants to automated security systems, we'll take you on a journey
                            through the cutting-edge technology that's turning houses into high-tech havens.
                        </p>

                        <p>
                            Curious about blockchain but don't know where to start? Fear not! Our comprehensive guide to
                            blockchain technology breaks down the complexities and highlights its potential to
                            revolutionize various industries, from finance to healthcare.
                        </p>

                        <h3>The Rise of Artificial Intelligence: Separating Fact from Fiction </h3>
                        <p>
                            AI is a buzzword we hear everywhere, but what's real and what's just hype? We dive into the
                            world of artificial intelligence, exploring its genuine applications and debunking common
                            misconceptions.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem cumque in consectetur non iure
                            quis fugit numquam alias, qui, saepe unde est dicta reiciendis repudiandae voluptate,
                            veritatis porro velit minus!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sit! Doloremque quasi
                            assumenda officia libero minima. Provident tempore inventore perferendis quaerat culpa. Vero
                            voluptate culpa ducimus porro. Totam, error a?
                        </p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam eaque saepe.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam eaque saepe.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam eaque saepe.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam eaque saepe.</li>
                        </ul>

                        <h3> Gaming Laptops: Power and Portability Combined
                        </h3>
                        <p>
                            Gamers, unite! We take an in-depth look at the latest gaming laptops that pack a serious
                            punch without sacrificing portability. Say goodbye to bulky desktops and embrace the future
                            of mobile gaming.
                            Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                            quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum
                            ut a quam vitae.
                        </p>
                        <p>
                            Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                            incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                        </p>
                        <p>
                            Gamers, unite! We take an in-depth look at the latest gaming laptops that pack a serious
                            punch without sacrificing portability. Say goodbye to bulky desktops and embrace the future
                            of mobile gaming.
                            Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                            quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum
                            ut a quam vitae.
                        </p>
                        <p>
                            Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                            incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                        </p>
                        <p>
                            Gamers, unite! We take an in-depth look at the latest gaming laptops that pack a serious
                            punch without sacrificing portability. Say goodbye to bulky desktops and embrace the future
                            of mobile gaming.
                            Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                            quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum
                            ut a quam vitae.
                        </p>
                        <p>
                            Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                            incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                        </p>

                    </div>

                    <div class="entry-footer">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">Business</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div>

                </article>

                <!-- <div class="blog-author d-flex align-items-center">
                    <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
                    <div>
                        <h4>Jane Smith</h4>
                        <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas
                            repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde
                            voluptas.
                        </p>
                    </div>
                </div> -->

                <div class="blog-comments">

                    <h4 class="comments-count">8 Comments</h4>

                    <div id="comment-1" class="comment">
                        <div class="d-flex">
                            <div class="comment-img">
                                <i class='bx bx-user-circle'></i>
                            </div>
                            <div>
                                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                    sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="comment-2" class="comment">
                        <div class="d-flex">
                            <div class="comment-img">
                                <i class='bx bx-user-circle'></i></div>
                            <div>
                                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                    Officiis illo ut beatae.
                                </p>
                            </div>
                        </div>

                        <div id="comment-reply-1" class="comment comment-reply">
                            <div class="d-flex">
                                <div class="comment-img"><i class='bx bx-user-circle'></i></div>
                                <div>
                                    <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur
                                        ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut
                                        est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt
                                        qui illum omnis est et dolor recusandae.

                                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro
                                        aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur
                                        distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio
                                        laborum minima fugiat.

                                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error
                                        dolorum non autem quisquam vero rerum neque.
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="reply-form">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control"
                                        placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                            <button type="submit" class=" btn-primary">
                                <span>
                                    Post Comment
                                </span>
                            </button>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
