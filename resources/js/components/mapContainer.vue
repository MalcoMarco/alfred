<template>
    <div class="container-map d-none d-lg-block d-xl-block d-xxl-block">
        <picture>
            <!-- <source
                media="(max-width:428px)"
                srcset="https://stg.alfredpay.app/wp-content/uploads/2022/06/Map-375.png"
                alt="COMING<br>SOON"
            />
            <source
                media="(max-width:1920px)"
                srcset="https://stg.alfredpay.app/wp-content/uploads/2022/06/Map.png"
                alt="COMING<br>SOON"
            /> -->
            <img
                class="map"
                src="https://stg.alfredpay.app/wp-content/uploads/2022/06/Map.png"
                alt="COMING<br>SOON"
            />
        </picture>

        <div class="msj usa">
            <img
                class="pinTag"
                src="https://stg.alfredpay.app/wp-content/uploads/2022/06/pinusa.svg"
                alt="alfred pay - United States"
            />
            <div class="msjText">
                <h4 class="msjTitle sofia-pro-700">United States</h4>
                <p class="msjDescription sofia-pro-400">
                    Lauching in Summer ‘22
                </p>
            </div>
        </div>

        <div class="msj rd">
            <img
                class="pinTag"
                src="https://stg.alfredpay.app/wp-content/uploads/2022/06/pinrd.svg"
                alt="alfred pay - Dominican Republic"
            />
            <div class="msjText">
                <h4 class="msjTitle sofia-pro-700">Dominican Republic</h4>
                <p class="msjDescription sofia-pro-400">
                    Lauching in Summer ‘22
                </p>
            </div>
        </div>

        <div class="d-none">
            <div class="avatar guy" style="display: none">
                <div class="range"></div>
                <img
                    src="https://stg.alfredpay.app/wp-content/uploads/2022/06/Ellipse-1-1.svg"
                    alt="Avatar"
                />
            </div>

            <div class="avatar girl" style="display: none">
                <div class="range"></div>
                <img
                    src="https://stg.alfredpay.app/wp-content/uploads/2022/06/Ellipse-1-2.png"
                    alt="Avatar"
                />
            </div>

            <img
                class="send play"
                src="https://stg.alfredpay.app/wp-content/themes/Alfred%20Pay%20Theme/assets/images/comingSoonNew/locations/send.svg "
                alt="COMING<br>SOON"
                style="display: none"
            />
        </div>
    </div>
</template>

<script>
export default {
    created() {
        this.sendAnimation();
        this.avatarsAnimation();
    },
    methods: {
        sendAnimation() {
            function playSend1() {
                $(".send").fadeIn();

                setInterval(pause(), 1000);
            }

            function pauseSend1() {
                $(".send").fadeOut();
            }

            function play() {
                setTimeout(() => {
                    playSend1();
                }, 3000);
            }

            function pause() {
                setTimeout(() => {
                    pauseSend1();
                    play();
                }, 2500);
            }

            let pauseSend = setInterval(pause(), 1000);
        },
        avatarsAnimation() {
            function playSend1() {
                $(".avatar").fadeIn("slow");

                setInterval(pause(), 1000);
            }

            function pauseSend1() {
                $(".avatar").fadeOut("slow");
            }

            function play() {
                setTimeout(() => {
                    playSend1();
                }, 3000);
            }

            function pause() {
                setTimeout(() => {
                    pauseSend1();
                    play();
                }, 2500);
            }

            let pauseSend = setInterval(pause(), 1000);
        },
    },
};
</script>

<style lang="scss" scoped>
.container-map {
    position: relative;
}
.map {
    width: 100%;
    max-width: 28.96vw;
    z-index: 0;
}
.msj.usa {
    top: 2.6vw;
    left: 8.75vw;
}
%hovermsj {
    opacity: 1;
    background: #ffffff;
    box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 14px;
    width: unset;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    padding: 0.78125vw 1.0416666667vw;
    margin-left: 1.3020833333vw;
}
.usa:hover > .msjText {
    @extend %hovermsj;
}
.msj {
    z-index: 1;
    position: absolute;
    z-index: 1;
    transition: 0.3s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
}
.msj:hover .pinTag {
    transform: scale(1.15);
}
.msjText {
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    visibility: hidden;
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    transition: 0.2s linear;
    visibility: visible;
}
.msjTitle {
    font-size: calc(2.116vw - 16.672px);
    margin: 0px;
    padding: 0px;
    width: 100%;
    letter-spacing: 0px;
    color: #022150;
    margin: unset;
    font-family: "Sofia Pro";
    font-weight: 500;
    line-height: 1.2;
}
.msjdescription {
    font-size: calc(-6.9306930693vw + 72.801980198px);
    margin: 0px;
    padding: 0px;
    width: 100%;
    letter-spacing: 0px;
    color: black;
    margin: unset;
}
.pinTag {
    z-index: 1;
    width: 2.08vw;
    transition: 0.8s ease-in-out;
}
.msj.rd {
    top: 8.6vw;
    left: 17.17vw;
}
.rd:hover > .msjText {
    @extend %hovermsj;
}

@media only screen and (min-width: 834px) {
    .msj.rd {
        top: 10.78vw;
        left: 23.56vw;
    }
}
@media only screen and (min-width: 1440px) {
    .msj.rd {
        top: 7.78vw;
        left: 17.56vw;
    }
}

@media screen and (max-width: 375px) {
    .msj.usa {
        top: 8.5333333333vw;
        left: 34.9333333333vw;
    }
}
@media screen and (max-width: 834px) {
    .header .container-locations .container-map .map {
        max-width: 100%;
    }
    .pinTag {
        width: 4.79vw;
        transition: 0.8s ease-in-out;
    }
}
@media screen and (max-width: 1440px) {
    .map {
        max-width: 38.6vw;
    }
    .msj.usa {
        top: 3.47vw;
        left: 11.6666666667vw;
    }
    .pinTag {
        width: 2.78vw;
        transition: 0.8s ease-in-out;
    }
}
</style>
