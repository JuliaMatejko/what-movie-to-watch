<div class="dropdown">
  <div class="dropdown-btns">
    <button id="myFilterBtn" class="btn dropbtn" onclick="openDropdown('filters')">Filter</button>
    
    <button id="addMovieBtn" class="btn dropbtn" onclick="openDropdown('addmovie')">Add movie to my movie list <i class="fas fa-plus"></i></button>
  </div>

  <div id="filters" class="dropdownContent">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
  </div>

  <div id="addmovie" class="dropdownContent">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
  </div>
</div>


<div class="wrapper">
  <div class="my-side-box left-sb"></div>
  <div class="mymovies-content">

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating1')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview1')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Niezwykła podróżaaa aaaa
          aaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa</div>
          <div class="movie-date-release">(2012)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating1" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview1" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating2')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview2')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Pustkowie Smauga</div>
          <div class="movie-date-release">(2013)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating2" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview2" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating3')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview3')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Bitwa Pięciu Armii</div>
          <div class="movie-date-release">(2014)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating3" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview3" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

     <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating4')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview4')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Drużyna Pierścienia</div>
          <div class="movie-date-release">(2001)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating4" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview4" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating5')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview5')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Dwie wieże</div>
          <div class="movie-date-release">(2002)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating5" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview5" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating6')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview6')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Powrót króla</div>
          <div class="movie-date-release">(2003)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating6" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview6" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating7')" type="button">
          <p class="small">My Rating</p>
          <div class="rating my-rating">7.6</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview7')" type="button">
          <p>My Review <i class="fas fa-angle-down"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Gdzie jest Nemo?</div>
          <div class="movie-date-release">(2003)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating7" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>
    <div id="myreview7" class="dropdownContent">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
      <p>Curabitur pretium ac nulla vitae dictum. Mauris sed augue consequat, euismod tortor non, imperdiet velit. Integer sagittis erat et turpis consectetur, et vehicula nisi facilisis. Curabitur lacinia sapien sodales, imperdiet leo ut, vulputate nisl. Vestibulum eget rhoncus augue, vel consectetur nunc. Maecenas dignissim vitae turpis ac laoreet. Pellentesque tortor purus, ornare tincidunt nisl id, ullamcorper aliquam magna. Nullam a venenatis nunc, quis accumsan tellus. Duis faucibus non felis et.</p>
    </div>


  </div>
  <div class="my-side-box right-sb"></div>
</div>

<div class="pagination-box">
  <div class="pagination">
    <a href="#first"><div class="pag-bg">&laquo;</div></a>
    <a href="#1"><div class="pag-bg">1</div></a>
    <a class="active" href="#2"><div class="pag-bg">2</div></a>
    <a href="#3"><div class="pag-bg">3</div></a>
    <a href="#4"><div class="pag-bg">4</div></a>
    <a href="#5"><div class="pag-bg">5</div></a>
    <a href="#6"><div class="pag-bg">6</div></a>
    <a href="#last"><div class="pag-bg">&raquo;</div></a>
  </div>
</div>