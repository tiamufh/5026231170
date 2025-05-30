<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Linktree Clone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="stylesheet" href="TugasLinktree/style2.css" />
    <style></style>
  </head>
  <body class="d-flex justify-content-center w-full">
    <div class="w-50">
      <div class="d-flex justify-content-between">
        <!-- Tombol Lonceng -->
        <button
          id="btn-notif"
          class="floating-button"
          data-toggle="modal"
          data-target="#notifModal"
          disabled
        >
          <i class="fas fa-bell"></i>
        </button>

        <!-- Tombol 3 Titik -->
        <button id="btn-options" class="floating-button">
          <i class="fas fa-ellipsis-v"></i>
        </button>
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center">
        <img
          src="https://ugc.production.linktr.ee/719ddd89-89fc-4599-af46-8cedc811ffaa_IMG-1454.jpeg?io=true&size=avatar-v3_0"
          class="profile-pic mb-2"
        />
        <button
          class="btn btn-primary"
          onclick="showOGPreview('https://www.twitch.tv/fredericchen')"
        >
          Preview Twitch Link
        </button>
        <h4 class="text-white">@fredericchen</h4>
        <p class="text-light">genderfluid, chinese, mother of 4 cats</p>

        <div class="d-flex flex-wrap justify-content-center align-items-center">
          <a
            href="https://venmo.com/fredericchen1435"
            target="_blank"
            class="social-icon"
            title="Venmo"
            aria-label="Venmo"
          >
            <i class="fab fa-cc-visa" style="color: white"></i>
          </a>

          <a
            href="https://www.YouTube.com/FredericChen"
            target="_blank"
            class="social-icon"
            title="YouTube"
            aria-label="YouTube"
          >
            <i class="fab fa-youtube" style="color: white"></i>
          </a>

          <a
            href="https://www.twitch.tv/frederic_chen"
            target="_blank"
            class="social-icon"
            title="Twitch"
            aria-label="Twitch"
          >
            <i class="fab fa-twitch" style="color: white"></i>
          </a>

          <a
            href="https://tiktok.com/@frederic.chen"
            target="_blank"
            class="social-icon"
            title="TikTok"
            aria-label="TikTok"
          >
            <i class="fab fa-tiktok" style="color: white"></i>
          </a>
        </div>
      </div>

      <div class="tab-nav d-flex position-relative">
        <div id="pill" class="tab-pill"></div>
        <button
          id="btn-links"
          class="tab-button active"
          onclick="moveTab('left')"
        >
          Links
        </button>
        <button id="btn-shop" class="tab-button" onclick="moveTab('right')">
          Shop
        </button>
      </div>

      <!-- Link -->
      <div id="content-links" class="tab-content active">
        <a target="_blank" href="">
          <div
            class="image-card mt-5"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <a
              href="https://studiocult.co/collections/frederic-chen-x-studiocult-metallic-meadow"
              target="_blank"
              class="thumbnail-link"
            >
              <img
                src="https://ugc.production.linktr.ee/9083e815-5847-4772-8376-7700ab22f167_IMG-1454.jpeg?io=true&size=thumbnail-feature-v1_0"
                alt="Thumbnail Image"
              />
              <div class="card-overlay">
                <span>🎥 <strong>My Jewelry Collection</strong></span>
              </div>
            </a>
            <i class="fas fa-ellipsis-v menu-icon"></i>
          </div>
        </a>

        <a target="_blank" href="https://shopmy.us/collections/1385668">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://ugc.production.linktr.ee/1NSCxNLIQIW4ZH0W3C1j_zoom-1016190-1674903247209-zoom-1016184-1674903147259-cosrx-aloe-soothing-sun-cream-425.jpg?io=true&size=thumbnail-stack-v1_0"
              alt="Thumbnail"
            />
            <div class="card-body">My Fave Sunscreens 🌞</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>

        <!-- Container Grid -->
        <div class="card-grid-container">
          <!-- Card 1 -->
          <a href="https://shopmy.us/fredericchen" target="_blank">
            <div
              class="card-grid-item"
              style="
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
              "
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
              <img
                src="https://ugc.production.linktr.ee/47a96d3d-188a-44ee-9549-bc0bcb9ecb7e_IMG-0925-1.png?io=true&size=thumbnail-stack-v1_0"
                alt="Makeup"
              />
              <div class="card-grid-footer">
                <span>makeup</span>
                <span class="menu-icon">⋮</span>
              </div>
            </div>
          </a>

          <!-- Card 2 -->
          <a href="https://shopmy.us/fredericchen/skincare" target="_blank">
            <div
              class="card-grid-item"
              style="
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
              "
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
              <img
                src="https://ugc.production.linktr.ee/d8639747-d206-41e1-9a5c-c01e540aaaad_C0523.00-03-03-22.Still005.jpeg?io=true&size=thumbnail-stack-v1_0"
                alt="Skincare"
              />
              <div class="card-grid-footer">
                <span>skincare</span>
                <span class="menu-icon">⋮</span>
              </div>
            </div>
          </a>

          <!-- Card 3 -->
          <a href="https://shopmy.us/fredericchen/outfits" target="_blank">
            <div
              class="card-grid-item"
              style="
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
              "
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
              <img
                src="https://ugc.production.linktr.ee/e89c6a72-a35c-41ef-9e1c-71a3b1caaff4_IMG-7562.jpeg?io=true&size=thumbnail-stack-v1_0"
                alt="Outfits"
              />
              <div class="card-grid-footer">
                <span>outfits</span>
                <span class="menu-icon">⋮</span>
              </div>
            </div>
          </a>

          <!-- Card 4 -->
          <a href="https://shopmy.us/collections/724970" target="_blank">
            <div
              class="card-grid-item"
              style="
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
              "
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
              <img
                src="https://ugc.production.linktr.ee/64dbba09-b5fd-4020-9b37-c8801bd49d19_IMG-1993.jpeg?io=true&size=thumbnail-stack-v1_0"
                alt="Jewelry"
              />
              <div class="card-grid-footer">
                <span>jewelry</span>
                <span class="menu-icon">⋮</span>
              </div>
            </div>
          </a>
        </div>

        <a href="https://forms.gle/LHVZ5jbH28zSKeN48" target="_blank">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://assets.production.linktr.ee/deaac9570a7fb4daa771a30e4df2b600288d2cd0/icons/tabler-icons/question-mark.svg"
              alt="Thumbnail"
            />
            <div class="card-body">can't find a product? ask here</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>

        <h4 class="text-white text-center">FOLLOW ME ELSE WHERE</h4>

        <div
          class="card-grid-item youtube-card"
          style="
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
          "
          onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
        >
          <a
            href="https://www.youtube.com/watch?v=E5zNGQV9kWo"
            target="_blank"
            class="thumbnail-link"
          >
            <img
              src="https://i.ytimg.com/vi/E5zNGQV9kWo/hqdefault.jpg"
              alt="YouTube Thumbnail"
            />
            <div class="play-button-overlay">
              <i class="fas fa-play"></i>
            </div>
          </a>

          <div class="youtube-content">
            <h3>YouTube</h3>
            <button class="subscribe-btn">
              <i class="fab fa-youtube"></i> Subscribe
            </button>
          </div>

          <i class="fas fa-ellipsis-v menu-icon"></i>
        </div>

        <a href="https://www.twitch.tv/frederic_chen" target="_blank">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://assets.production.linktr.ee/deaac9570a7fb4daa771a30e4df2b600288d2cd0/icons/tabler-icons/brand-twitch.svg"
              alt="Thumbnail"
            />
            <div class="card-body">💜 Twitch 💜</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>

        <a
          href="https://www.tiktok.com/@frederic.chen?source=h5_m"
          target="_blank"
        >
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://assets.production.linktr.ee/deaac9570a7fb4daa771a30e4df2b600288d2cd0/icons/tabler-icons/brand-tiktok.svg"
              alt="Thumbnail"
            />
            <div class="card-body">Tiktok</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>

        <a href="http://www.instagram.com/frederic.chen" target="_blank">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://assets.production.linktr.ee/deaac9570a7fb4daa771a30e4df2b600288d2cd0/icons/tabler-icons/brand-instagram.svg"
              alt="Thumbnail"
            />
            <div class="card-body">Instagram</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>

        <a href="https://throne.com/frederic_chen" target="_blank">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://ugc.production.linktr.ee/3900dd37-ca66-4fb5-a4cf-f8645d0433bc_twitch-83873039.webp?io=true&size=thumbnail-stack-v1_0"
              alt="Thumbnail"
            />
            <div class="card-body">👑 Throne Wishlist 👑</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>
        <div
          data-toggle="modal"
          data-target="#catFoodModal"
          class="card card-link card-horizontal"
          style="
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
          "
          onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
        >
          <img
            src="https://ugc.production.linktr.ee/b9ca6e99-89cd-4403-8562-976f87011165_d12a440b-68bf-4a66-a0f6-9407b927552d-images--10-.jpeg?io=true&size=thumbnail-stack-v1_0"
            alt="Thumbnail"
          />
          <div class="card-body">Get FREE Cat Food!</div>
          <div class="menu-icon">⋮</div>
        </div>

        <a href="https://bit.ly/FredericServer" target="_blank">
          <div
            class="card card-link card-horizontal"
            style="
              border-radius: 15px;
              overflow: hidden;
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              cursor: pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
          >
            <img
              src="https://assets.production.linktr.ee/deaac9570a7fb4daa771a30e4df2b600288d2cd0/icons/tabler-icons/brand-discord.svg"
              alt="Thumbnail"
            />
            <div class="card-body">Discord Server</div>
            <div class="menu-icon">⋮</div>
          </div>
        </a>
      </div>

      <!-- shop -->
      <div id="content-shop" class="tab-content">
        <p class="text-white text-center">
          Products may contain affiliate links
        </p>
        <h6 class="text-white text-center">Shoppable posts</h6>

        <div class="carousel">
          <button class="carousel-btn prev">&lt;</button>
          <div class="carousel-track" id="carouselContainer">
            <!-- repeat one of your image-cards per item -->

            <!-- etc… -->
          </div>
          <button class="carousel-btn next">&gt;</button>
        </div>

        <div style="max-width: 600px; margin: auto">
          <div
            style="
              display: flex;
              align-items: center;
              background-color: white;
              border: 1px solid #ccc;
              border-radius: 999px;
              padding: 0.5rem 1rem;
              box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            "
          >
            <span style="color: #666; margin-right: 0.5rem">🔍</span>
            <input
              type="text"
              placeholder="Search fredericchen's products"
              style="
                border: none;
                outline: none;
                flex: 1;
                font-size: 1rem;
                color: #333;
                background-color: transparent;
                font-family: inherit;
              "
            />
          </div>
        </div>

        <h6 class="text-white text-center">My Products</h6>

        <div class="products-wraper" id="productList">
          <a href="https://shopmy.us/collections/810076" target="_blank">
            <div
              class="product-box text-center mx-0 my-2"
              style="
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
              "
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.3)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
              <div class="d-flex justify-content-center">
                <div class="col-3">
                  <img
                    src="https://ugc.production.linktr.ee/6e09294c-249f-4f83-b732-08937fa03b6c_l-p0198237263.jpeg?io=true&size=square-fit"
                    alt="Product 1"
                    class="product-img"
                  />
                </div>
              </div>

              <div class="bottom-text">
                <div class="product-title">
                  the thinnest eyeliner (FREDERIC + PMPRGN for $ off)
                </div>
                <div class="product-subtitle">US$7,29</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Modal Notifikasi -->
    <div
      id="notifModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="notifModalLabel"
      aria-hidden="true"
    ></div>

    <!-- modal carousel -->
    <div
      class="modal fade"
      id="postModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="postModalLabel"
      aria-hidden="true"
      style="
        background: rgba(255, 255, 255, 0.7); /* Light tint */
        backdrop-filter: blur(12px); /* Blur background */
        -webkit-backdrop-filter: blur(12px);
      "
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: none; border: none">
          <div class="sticky-top w-full d-flex justify-content-end">
            <button class="rounded-circle border-0 mr-1">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class=" "
                role="img"
                aria-hidden="false"
                aria-labelledby="ltclid8_title "
              >
                <title id="ltclid8_title">Apple Share</title>
                <path
                  fill="currentColor"
                  d="m10.65 3.85.35.36.7-.71-.35-.35-3-3h-.7l-3 3-.36.35.71.7.35-.35L7.5 1.71V10h1V1.7l2.15 2.15ZM1 5.5l.5-.5H4v1H2v9h12V6h-2V5h2.5l.5.5v10l-.5.5h-13l-.5-.5v-10Z"
                ></path>
              </svg>
            </button>
            <button
              class="rounded-circle border-0"
              data-dismiss="modal"
              aria-label="Close"
            >
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class=" "
                role="img"
                aria-hidden="false"
                aria-labelledby="ltclid9_title "
              >
                <title id="ltclid9_title">Close</title>
                <path
                  fill="currentColor"
                  d="m13.63 3.12.37-.38-.74-.74-.38.37.75.75ZM2.37 12.89l-.37.37.74.74.38-.37-.75-.75Zm.75-10.52L2.74 2 2 2.74l.37.38.75-.75Zm9.76 11.26.38.37.74-.74-.37-.38-.75.75Zm0-11.26L2.38 12.9l.74.74 10.5-10.51-.74-.75Zm-10.5.75 10.5 10.5.75-.73L3.12 2.37l-.75.75Z"
                ></path>
              </svg>
            </button>
          </div>

          <div class="mt-5 text-center">
            <h2 id="modalTitle">title</h2>
            <p id="modalDetail">1 Post • 15 Products</p>
            <div class="d-flex justify-content-center w-100">
              <video
                id="modalProductVideo"
                playsinline=""
                loop=""
                autoplay
                muted
                class="w-100 rounded"
                src="https://scontent-sea1-1.cdninstagram.com/o1/v/t2/f2/m86/AQOcUA5scqZLXr2ii9Ls_SbcIsagx6IK8J-sQIaCeI7ODIbF3MNpdiUfQiRwalRqjzGbhL5wv2zJZX-loWFnlZdr5gOXKkidfcdNP3A.mp4?_nc_cat=103&amp;_nc_sid=5e9851&amp;_nc_ht=scontent-sea1-1.cdninstagram.com&amp;_nc_ohc=Rgnv7YkfQnYQ7kNvwEdDxCw&amp;efg=eyJ2ZW5jb2RlX3RhZyI6Inhwdl9wcm9ncmVzc2l2ZS5JTlNUQUdSQU0uQ0xJUFMuQzMuNzIwLmRhc2hfYmFzZWxpbmVfMV92MSIsInhwdl9hc3NldF9pZCI6MTE0Nzk5MTg5NjE4OTE5MywidmlfdXNlY2FzZV9pZCI6MTAwOTksImR1cmF0aW9uX3MiOjYyLCJ1cmxnZW5fc291cmNlIjoid3d3In0%3D&amp;ccb=17-1&amp;vs=93c7bd6903922fb&amp;_nc_vs=HBksFQIYUmlnX3hwdl9yZWVsc19wZXJtYW5lbnRfc3JfcHJvZC9EMjRDMkM0MzJDMUExQzA0QTYxQzRBN0U4MzI0RDM4NV92aWRlb19kYXNoaW5pdC5tcDQVAALIAQAVAhg6cGFzc3Rocm91Z2hfZXZlcnN0b3JlL0dLbk5WQndVTkhHb1NHNElBSWtKU3dwUTg5dHBicV9FQUFBRhUCAsgBACgAGAAbAogHdXNlX29pbAExEnByb2dyZXNzaXZlX3JlY2lwZQExFQAAJpKk65L2hYoEFQIoAkMzLBdATzsi0OVgQhgSZGFzaF9iYXNlbGluZV8xX3YxEQB1_gcA&amp;_nc_zt=28&amp;oh=00_AfEdlmbHYMda5qJcDufiK8Y1rRWUNu757A4LsROf2_LaNg&amp;oe=67FF7C58"
                data-ugc-video-index="0"
              ></video>
            </div>
            <div class="container w-full">
              <div
                id="modalProductList"
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 gx-4 gy-5"
              >
                <!-- Product cards will be injected here -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal product -->
    <div
      class="modal fade"
      id="productModal"
      tabindex="-1"
      aria-labelledby="productModalLabel"
      aria-hidden="true"
      style="
        background: rgba(255, 255, 255, 0.7); /* Light tint */
        backdrop-filter: blur(12px); /* Blur background */
        -webkit-backdrop-filter: blur(12px);
      "
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: none; border: none">
          <div class="sticky-top w-full d-flex justify-content-end">
            <button class="rounded-circle border-0 mr-1">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class=" "
                role="img"
                aria-hidden="false"
                aria-labelledby="ltclid8_title "
              >
                <title id="ltclid8_title">Apple Share</title>
                <path
                  fill="currentColor"
                  d="m10.65 3.85.35.36.7-.71-.35-.35-3-3h-.7l-3 3-.36.35.71.7.35-.35L7.5 1.71V10h1V1.7l2.15 2.15ZM1 5.5l.5-.5H4v1H2v9h12V6h-2V5h2.5l.5.5v10l-.5.5h-13l-.5-.5v-10Z"
                ></path>
              </svg>
            </button>
            <button
              class="rounded-circle border-0"
              data-dismiss="modal"
              aria-label="Close"
            >
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class=" "
                role="img"
                aria-hidden="false"
                aria-labelledby="ltclid9_title "
              >
                <title id="ltclid9_title">Close</title>
                <path
                  fill="currentColor"
                  d="m13.63 3.12.37-.38-.74-.74-.38.37.75.75ZM2.37 12.89l-.37.37.74.74.38-.37-.75-.75Zm.75-10.52L2.74 2 2 2.74l.37.38.75-.75Zm9.76 11.26.38.37.74-.74-.37-.38-.75.75Zm0-11.26L2.38 12.9l.74.74 10.5-10.51-.74-.75Zm-10.5.75 10.5 10.5.75-.73L3.12 2.37l-.75.75Z"
                ></path>
              </svg>
            </button>
          </div>
          <div class="mt-5 text-center">
            <h2 id="modalTitlePr">title</h2>
            <p id="modalDetailPr">1 Post • 15 Products</p>

            <div class="container w-full">
              <div
                id="modalProductListPr"
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 gx-4 gy-5"
              >
                <!-- Product cards will be injected here -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Free cat food-->
    <div
      class="modal fade"
      id="catFoodModal"
      tabindex="-1"
      aria-labelledby="catFoodModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div
          class="modal-content"
          style="border-radius: 20px; padding: 20px; text-align: center"
        >
          <div class="modal-header border-0">
            <h5
              class="modal-title w-100"
              id="catFoodModalLabel"
              style="font-weight: bold"
            >
              Get FREE Cat Food!
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <img
              src="https://ugc.production.linktr.ee/b9ca6e99-89cd-4403-8562-976f87011165_d12a440b-68bf-4a66-a0f6-9407b927552d-images--10-.jpeg"
              alt="Smalls"
              style="border-radius: 16px; margin-bottom: 15px"
            />
            <p style="margin-bottom: 10px">
              Copy the code and visit the store to claim your discount
            </p>
            <div
              class="d-flex justify-content-center align-items-center mb-3"
              style="border: 1px solid #ddd; border-radius: 12px; padding: 10px"
            >
              <span style="font-weight: bold">FRIENDOFMISOWXWV</span>
              <button
                class="btn btn-outline-secondary btn-sm ms-2"
                onclick="navigator.clipboard.writeText('FRIENDOFMISOWXWV')"
              >
                Copy code
              </button>
            </div>
            <a
              href="https://www.smalls.com/?clickid=1Yj2wHVS7xyNUV1SCNVhsWwlUkATS5wMKXBUUw0&irgwc=1&utm_source=affiliate&utm_medium=impact&utm_term=Frederic%20Chen_3525058_mediapartner&utm_content=Online%20Tracking%20Link_511473_ONLINE_TRACKING_LINK&utm_campaign=8746"
              target="_blank"
              class="btn btn-dark w-100"
              style="border-radius: 12px"
              >Go to store</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Share -->
    <div class="modal fade" id="metaModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center" style="padding: 1.5rem">
          <!-- Image Container -->
          <div
            style="
              width: 80px;
              height: 80px;
              background-color: #f0f0f0;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 20px;
              margin: 0 auto 1rem;
            "
          >
            <img
              id="metaIcon"
              src=""
              alt="Site Icon"
              style="max-width: 60px; max-height: 60px; object-fit: contain"
            />
          </div>

          <!-- Title -->
          <h5 class="modal-title" id="metaTitle">Loading...</h5>

          <!-- Description -->
          <p id="metaDesc" class="text-muted" style="margin-top: 0.5rem"></p>

          <!-- Link -->
          <a
            id="metaURL"
            href="#"
            target="_blank"
            class="text-decoration-none"
            style="word-break: break-all"
          ></a>

          <!-- Close Button -->
          <button
            type="button"
            class="btn btn-secondary mt-3"
            data-bs-dismiss="modal"
          >
            Close
          </button>
        </div>
      </div>
    </div>

    <!-- Modal lonceng -->
    <div
      class="modal fade"
      id="subscribeModal"
      tabindex="-1"
      aria-hidden="true"
    >

          <!-- Close Button -->
          <button
            type="button"
            class="btn-close position-absolute"
            style="top: 1rem; right: 1rem"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>


        </div>
      </div>
    </div>

    <script async src="//www.instagram.com/embed.js"></script>
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function moveTab(direction) {
        const pill = document.getElementById("pill");
        const btnLinks = document.getElementById("btn-links");
        const btnShop = document.getElementById("btn-shop");
        const contentLinks = document.getElementById("content-links");
        const contentShop = document.getElementById("content-shop");

        if (direction === "right") {
          pill.classList.add("move-right");
          btnLinks.classList.remove("active");
          btnShop.classList.add("active");
          contentLinks.classList.remove("active");
          contentShop.classList.add("active");
        } else {
          pill.classList.remove("move-right");
          btnLinks.classList.add("active");
          btnShop.classList.remove("active");
          contentLinks.classList.add("active");
          contentShop.classList.remove("active");
        }
      }

      const track = document.querySelector(".carousel-track");
      const prev = document.querySelector(".carousel-btn.prev");
      const next = document.querySelector(".carousel-btn.next");

      function getStep() {
        const card = track.querySelector(".image-card-carousel");
        const cardRect = card.getBoundingClientRect();
        // read the CSS gap on the flex container
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        return cardRect.width + gap;
      }

      prev.addEventListener("click", () => {
        track.scrollBy({ left: -getStep(), behavior: "smooth" });
      });
      next.addEventListener("click", () => {
        track.scrollBy({ left: getStep(), behavior: "smooth" });
      });
    </script>
    <script src="funtions.js"></script>
    <script src="script.js"></script>
    <script>
      async function showOGPreview(url) {
        const api =
          "https://jsonlink.io/api/extract?url=" + encodeURIComponent(url);

        try {
          const res = await fetch(api);
          const data = await res.json();

          // Get Open Graph data
          const image =
            data.links?.["og:image"] ||
            data.images?.[0] ||
            "https://via.placeholder.com/60";
          const siteName =
            data.meta?.["og:site_name"] || data.title || "No site name found";
          const description =
            data.meta?.["og:description"] || "No description available";
          const finalUrl = data.url || url;

          // Update modal content
          document.getElementById("metaIcon").src = image;
          document.getElementById("metaTitle").textContent = siteName;
          document.getElementById("metaDesc").textContent = description;
          const link = document.getElementById("metaURL");
          link.href = finalUrl;
          link.textContent = finalUrl;

          // Show modal
          const modal = new bootstrap.Modal(
            document.getElementById("metaModal")
          );
          modal.show();
        } catch (err) {
          alert("Failed to fetch metadata: " + err.message);
        }
      }
    </script>
  </body>
</html>
