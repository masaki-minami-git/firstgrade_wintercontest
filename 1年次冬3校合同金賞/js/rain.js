
  jQuery('.container').raindrops(
    {color:'#ff6e00',
    canvasHeight:500,
    rippleSpeed: 0.05,
    waveLength: 100,
    frequency: 1,
    density: 0});

    const custom_anime = gsap.timeline({
        scrollTrigger: {
          trigger: ".footer", //アニメーションが始まるトリガーとなる要素
          start: 'top center',
          end: 'top top', 
          scrub: 1,
        }
      });
      custom_anime.to('.footer', //アニメーションする要素
  {opacity: 1});
  custom_anime.to('.footerBokin',{ 
    opacity:1, 
    duration: 2.5, ease: "power1.out",
    scrollTrigger: {
      trigger: '.footer',//アニメーションが始まるトリガーとなる要素
      start: 'top 30%', //アニメーションが始まる位置を指定
      end: 'top top', 
      // markers: true,
      scrub: 0.3,
    }
  },">");
  custom_anime.to('.footerClowd',{ 
    opacity:1, 
    duration: 2.5, ease: "power1.out",
    scrollTrigger: {
      trigger: '.footer',//アニメーションが始まるトリガーとなる要素
      start: 'top 30%', //アニメーションが始まる位置を指定
      end: 'top top', 
      // markers: true,
      scrub: 0.3,
    }
  },">");
      