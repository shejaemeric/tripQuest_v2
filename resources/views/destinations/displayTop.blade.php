<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <style>
  body{
    margin:0px;
  }
  .desktop {
    background-color: #ffffff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
    height: 100vh;
}

.desktop .overlap-wrapper {
    background-color: #ffffff;
    overflow: hidden;
    width: inherit;
    height: inherit;
}

.desktop .overlap {
    position: relative;
    width: 100%;
    height: 100%;
}

.desktop .rectangle {
    position: absolute;
    width: inherit;
    height: inherit;
    top: 0;
    left: 0;
}

.desktop .div {
    position: absolute;
    width: inherit;
    height: inherit;
    top: 0;
    left: 0;
    mix-blend-mode: color-burn;
    background: radial-gradient(
        50% 50% at 50% 50%,
        rgba(0, 0, 0, 0) 0%,
        rgba(0, 0, 0, 0.7) 100%
    );
}

.desktop .group {
    position: absolute;
    width: 179px;
    height: 45px;
    top: 51px;
    left: 55px;
}

.desktop .trip-quest {
    position: absolute;
    top: 1px;
    left: 57px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 26px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .text-wrapper {
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 26px;
    letter-spacing: 0;
}

.desktop .travel {
    position: absolute;
    width: 56px;
    height: 45px;
    top: 0;
    left: 0;
}

.desktop .group-2 {
    position: absolute;
    width: 443px;
    height: 25px;
    top: 58px;
    left: 716px;
}

.desktop .home {
    position: absolute;
    width: 66px;
    top: 0;
    left: 0;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .destinations {
    position: absolute;
    width: 143px;
    top: 0;
    left: 135px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .flights {
    position: absolute;
    width: 87px;
    top: 0;
    left: 350px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-3 {
    position: absolute;
    width: 222px;
    height: 42px;
    top: 48px;
    left: 1150px;
}

.desktop .frame {
    display: flex;
    align-items: flex-start;
    padding: 10px 22px;
    gap: 10px;
}

.desktop .login {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    margin-right: -0.24px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .signup-wrapper {
    display: flex;
    width: 115px;
    height: 42px;
    align-items: flex-start;
    padding: 10px 28px;
    left: 108px;
    background-color: #ffffff;
    border-radius: 71px;
    gap: 10px;
    position: absolute;
    top: 0;
}

.desktop .signup {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    margin-right: -0.26px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #03496c;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-4 {
    position: absolute;
    width: 715px;
    height: 339px;
    top: 364px;
    left: 96px;
}

.desktop .frame-2 {
    display: flex;
    width: 178px;
    height: 61px;
    align-items: center;
    gap: 25px;
    padding: 17px 28px;
    position: absolute;
    top: 278px;
    left: 13px;
    background-color: #006cd1;
    border-radius: 12px;
}

.desktop .explore {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .arrow-right {
    position: relative;
    width: 15px;
    height: 15px;
    margin-right: -3px;
}

.desktop .p {
    width: 555px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 23px;
    letter-spacing: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}

.desktop .comoros {
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #ffffff;
    font-size: 119.9px;
}

.desktop .overlap-group-wrapper {
    position: absolute;
    width: 14px;
    height: 593px;
    top: 224px;
    left: 47px;
}

.desktop .overlap-group {
    position: relative;
    height: 593px;
}

.desktop .line {
    position: absolute;
    width: 2px;
    height: 583px;
    top: 10px;
    left: 6px;
}

.desktop .ellipse {
    width: 5px;
    height: 6px;
    top: 7px;
    left: 5px;
    border-radius: 2.27px/3px;
    position: absolute;
    background-color: #ffffff;
}

.desktop .ellipse-2 {
    width: 5px;
    height: 6px;
    top: 152px;
    left: 5px;
    border-radius: 2.27px/3px;
    position: absolute;
    background-color: #ffffff;
}

.desktop .ellipse-3 {
    width: 5px;
    height: 6px;
    top: 297px;
    left: 5px;
    border-radius: 2.27px/3px;
    position: absolute;
    background-color: #ffffff;
}

.desktop .ellipse-4 {
    width: 5px;
    height: 6px;
    top: 442px;
    left: 5px;
    border-radius: 2.27px/3px;
    position: absolute;
    background-color: #ffffff;
}

.desktop .ellipse-5 {
    width: 5px;
    height: 6px;
    top: 587px;
    left: 5px;
    border-radius: 2.27px/3px;
    position: absolute;
    background-color: #ffffff;
}

.desktop .ellipse-6 {
    width: 14px;
    height: 18px;
    top: 0;
    left: 0;
    border-radius: 7px/9px;
    opacity: 0.3;
    position: absolute;
    background-color: #ffffff;
}

.desktop .group-5 {
    position: absolute;
    width: 1352px;
    height: 64px;
    top: 913px;
    left: 47px;
}

.desktop .frame-3 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    left: 0;
    transform: rotate(-180deg);
    gap: 10px;
    position: absolute;
    top: 0;
}

.desktop .rectangle-2 {
    position: relative;
    width: 64px;
    height: 64px;
    background-color: #93939396;
    border-radius: 50px;
}

.desktop .arrow {
    position: absolute;
    width: 35px;
    height: 22px;
    top: 21px;
    left: 15px;
    transform: rotate(180deg);
}

.desktop .frame-4 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    left: 1288px;
    border-radius: 50px;
    gap: 10px;
    position: absolute;
    top: 0;
}

.desktop .img {
    position: absolute;
    width: 35px;
    height: 22px;
    top: 21px;
    left: 15px;
}
</style>
  <body>
    <div class="desktop">
      <div class="overlap-wrapper">
        <div class="overlap">
          <img class="rectangle" src="https://i.ibb.co/DGjkv27/Rectangle-2.png" />
          <div class="div"></div>
          <div class="group">
            <p class="trip-quest"><span class="text-wrapper">T</span> <span class="text-wrapper">ripQuest</span></p>
            <img class="travel" src="img/travel-1.svg" />
          </div>
          <div class="group-2">
            <div class="home">HOME</div>
            <div class="destinations">DESTINATIONS</div>
            <div class="flights">FLIGHTS</div>
          </div>
          <div class="group-3">
            <div class="frame"><div class="login">LOGIN</div></div>
            <div class="signup-wrapper"><div class="signup">SIGNUP</div></div>
          </div>
          <div class="group-4">
            <div class="frame-2">
              <div class="explore">EXPLORE</div>
              <img class="arrow-right" src="img/arrow-right.svg" />
            </div>
            <p class="p">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nunc, tortor mauris eget ut integer sit.
              Purus consequat urna vulputate turpis blandit sed.
            </p>
            <div class="comoros">COMOROS</div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group">
              <img class="line" src="img/line-1.svg" />
              <div class="ellipse"></div>
              <div class="ellipse-2"></div>
              <div class="ellipse-3"></div>
              <div class="ellipse-4"></div>
              <div class="ellipse-5"></div>
              <div class="ellipse-6"></div>
            </div>
          </div>
          <div class="group-5">
            <div class="frame-3">
              <div class="rectangle-2"></div>
              <img class="arrow" src="img/arrow-1.svg" />
            </div>
            <div class="frame-4">
              <div class="rectangle-2"></div>
              <img class="img" src="img/image.svg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
