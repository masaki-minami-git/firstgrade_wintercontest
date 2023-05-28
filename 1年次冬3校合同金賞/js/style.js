//ロゴの設定

gsap.to('.logo1 , .logo2 ',{ //アニメーションしたい要素を指定
    scale:0.3, 
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 90%', //アニメーションが始まる位置を指定
    //   toggleActions: 'play pause none pause',
      end: 'top 10%', 
      // markers: true,
      scrub: 0.3,
    }
  });
  //ロゴにクラスfを追加  セクション毎に追加すること　消えちゃう

  
ScrollTrigger.create({
    trigger: '.catch', //アニメーションが始まるトリガーとなる要素
    start: 'top 80%',
    // markers: true,
    toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
    // once: true
  });
  ScrollTrigger.create({
    trigger: '.section1', //アニメーションが始まるトリガーとなる要素
    start: 'top top',
    // markers: true,
    toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
    // once: true
  });
//   ScrollTrigger.create({
//     trigger: '.catch', //アニメーションが始まるトリガーとなる要素
//     start: 'top 70%',
//     markers: true,
//     toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
//     // once: true
//   });
ScrollTrigger.create({
  trigger: '.side-scroll', //アニメーションが始まるトリガーとなる要素
  start: 'top top',
  // markers: true,
  toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
  // once: true
});
ScrollTrigger.create({
  trigger: '.sdgsSection', //アニメーションが始まるトリガーとなる要素
  start: 'top top',
  // markers: true,
  toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
  // once: true
});
ScrollTrigger.create({
  trigger: '.sdgsText', //アニメーションが始まるトリガーとなる要素
  start: 'top top',
  // markers: true,
  toggleClass: {targets: ".test1", className: "f"}, //クラスをつけたり、外したりできる
  // once: true
});





///フィクス

ScrollTrigger.create({
  trigger: '.section1',
  start: 'top -100px',
  // markers: true,
  toggleClass: {targets: ".frameTop", className: "fixedT"}, 
  // once: true
});
ScrollTrigger.create({
  trigger: '.section1', 
  start: 'top -100px',
  // markers: true,
  toggleClass: {targets: ".frameRight", className: "fixedR"},
  // once: true
});
ScrollTrigger.create({
  trigger: '.section1', 
  start: 'top -100px',
  // markers: true,
  toggleClass: {targets: ".frameBottom", className: "fixedB"},
  // once: true
});
ScrollTrigger.create({
  trigger: '.section1',
  start: 'top -100px',
  // markers: true,
  toggleClass: {targets: ".frameLeft", className: "fixedL"}, 
  // once: true
});







  gsap.to('.logo1',{
    x:-165,
    y:-65, 
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 90%', //アニメーションが始まる位置を指定
      end: 'top 10%', 
      scrub: 0.3,
    }
  });
  gsap.to('.logo2',{
    x:-167,
    y:-195, 
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 90%', //アニメーションが始まる位置を指定
      end: 'top 10%', 
      scrub: 0.3,
    }
  });
  //ロゴの色
  gsap.to('.logo1 , .logo2 ',{ 
    color: '#7d2030', 
    zIndex: '999',
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 30%', //アニメーションが始まる位置を指定
      end: 'top 10%', 
      // markers: true,
      scrub: 0.3,
    }
  });
  AOS.init()
//navの設定
gsap.to('.navi',{ 
    zIndex: '990', 
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 20%', //アニメーションが始まる位置を指定
    //   end: 'top 10%', 
      // markers: true,
      scrub: 0.3,
    }
  });
//ボディの色
  gsap.to('.color',{
    backgroundColor:'#fff', 
    scrollTrigger: {
      trigger: '.catch',//アニメーションが始まるトリガーとなる要素
      start: 'top 80%', //アニメーションが始まる位置を指定
      end: 'top 20%', 
      scrub: 1,
    }
  });


//REDLIST
gsap.to('.redListRed',{ 
  color: '#7d2030', 
  scrollTrigger: {
    trigger: '.redListText',//アニメーションが始まるトリガーとなる要素
    start: 'top 40%', //アニメーションが始まる位置を指定
    end: 'top 30%', 
    // markers: true,
    scrub: 0,
  }
});


//横スク

const listWrapperEl = document.querySelector('.side-scroll-list-wrapper');
const listEl = document.querySelector('.side-scroll-list');

gsap.to(listEl, {
  x: () => -(listEl.clientWidth - listWrapperEl.clientWidth),
  ease: 'none',
  scrollTrigger: {
    trigger: '.side-scroll',
    start: 'top top', // 要素の上端（top）が、ビューポートの上端（top）にきた時
    end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
    scrub: true,
    pin: true,
    anticipatePin: 1,
    invalidateOnRefresh: true,
  },
});



  //えほん的な

  // gsap.to('.leaf1',{
  //   x:'2000px', 
  //   scrollTrigger: {
  //     trigger: '.section1',//アニメーションが始まるトリガーとなる要素
  //     start: 'top top', //アニメーションが始まる位置を指定
  //     end: 'center 30%', 
  //     scrub: 0.3,
  //     markers: true,
  //   }
  // });


  //キャッチの設定
//   gsap.to('.catchLeft1',{ //アニメーションしたい要素を指定
//     x:500, //横に800px動かす
//     scrollTrigger: {
//       trigger: '.catch',//アニメーションが始まるトリガーとなる要素
//       start: 'top 80%', //アニメーションが始まる位置を指定
//       end: 'top 10%', 
//       markers: true,
//     //   scrub: 0.3,
//     }
//   });
//   gsap.to('.catchspan2',{ //アニメーションしたい要素を指定
//     opacity: 1,
//     x:1000, //横に800px動かす
//     scrollTrigger: {
//       trigger: '.catch',//アニメーションが始まるトリガーとなる要素
//       start: 'top 80%', //アニメーションが始まる位置を指定
//       end: 'top 10%', 
//       markers: true,
//     //   scrub: 0.3,
//     }
//   });
//   gsap.to('.catchspan3',{ //アニメーションしたい要素を指定
//     opacity: 1,
//     x:1000, //横に800px動かす
//     scrollTrigger: {
//       trigger: '.catch',//アニメーションが始まるトリガーとなる要素
//       start: 'top 80%', //アニメーションが始まる位置を指定
//       end: 'top 10%', 
//       markers: true,
//     //   scrub: 0.3,
//     }
//   });



ScrollTrigger.create({
  trigger: '.sdgsConteinar', //アニメーションが始まるトリガーとなる要素
  start: 'top center',
  // markers: true,
  toggleClass: {targets: ".sdgs", className: "s"}, //クラスをつけたり、外したりできる
  // once: true
});
gsap.to('.sdgs',{ //アニメーションしたい要素を指定
  opacity:1, 
  scrollTrigger: {
    trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
    start: 'top -40%', //アニメーションが始まる位置を指定
  //   toggleActions: 'play pause none pause',
    end: 'top -60%', 
    // markers: true,
    scrub: 0.3,
  }
});

gsap.to('.sdgs1',{ //アニメーションしたい要素を指定
  color: '#444', 
  scrollTrigger: {
    trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
    start: 'top -5%', //アニメーションが始まる位置を指定
  //   toggleActions: 'play pause none pause',
    end: 'top -10%', 
    // markers: true,
    scrub: 0.3,
  }
});

gsap.to('.sdgs2',{ //アニメーションしたい要素を指定
  color:  '#7d2030', 
  scrollTrigger: {
    trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
    start: 'top -5%', //アニメーションが始まる位置を指定
  //   toggleActions: 'play pause none pause',
    end: 'top -10%', 
    // markers: true,
    scrub: 0.3,
  }
});




//おにのあにめ連打



//一枚目 上にあげる
// gsap.to('.c',{ //アニメーションしたい要素を指定
//   top:'75px',
//   scrollTrigger: {
//     trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
//     start: 'top -65%', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top -80%', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });

// gsap.to('.a',{ //アニメーションしたい要素を指定
//   top:'325px',
//   scrollTrigger: {
//     trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
//     start: 'top -65%', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top -80%', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });



// gsap.to('.c',{ //アニメーションしたい要素を指定
//   top:'200px',
//   scrollTrigger: {
//     trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
//     start: 'top -95%', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top -110%', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });

// gsap.to('.a',{ //アニメーションしたい要素を指定
//   top:'200px',
//   scrollTrigger: {
//     trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
//     start: 'top -95%', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top -110%', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });

// gsap.to('.c',{ //アニメーションしたい要素を指定
//   top:'240px',
//   scrollTrigger: {
//     trigger: '.sdgsConteinar',//アニメーションが始まるトリガーとなる要素
//     start: 'top -110%', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top -170%', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });

// gsap.to('.c',{ //アニメーションしたい要素を指定
//   top:'240px',
//   scrollTrigger: {
//     trigger: 'sdgs13',//アニメーションが始まるトリガーとなる要素
//     start: 'top bottom', //アニメーションが始まる位置を指定
//   //   toggleActions: 'play pause none pause',
//     end: 'top center', 
//     // markers: true,
//     scrub: 0.3,
//   }
// });


//テスト
const custom_anime = gsap.timeline({
  scrollTrigger: {
    trigger: ".sdgsConteinar", //アニメーションが始まるトリガーとなる要素
    start: 'top -110%',
    end: 'top -420%', 
    scrub: 1,
  }
});

/*---１つ目の要素---*/
custom_anime.to (".c" ,{ top :'75px' });
custom_anime.to('.a', //アニメーションする要素
  {top: '325px'}, "<" );

custom_anime.to('.c', //アニメーションする要素
  {top: '200px'}, ">" );
  custom_anime.to('.a', //アニメーションする要素
  {top: '200px'}, "<" );


custom_anime.to('.c', //アニメーションする要素
  { transform: 'rotateZ(0deg) skewY(0deg) scale(1)' , x:'-34%', y:'-34%'}, ">1" );

custom_anime.to('.b', //アニメーションする要素
  {transform: 'rotateZ(0deg) skewY(0deg) scale(1)'  , x:'-34%', y:'-34%'}, "<" );

/*---２つ目の要素---*/
custom_anime.to('.a', //アニメーションする要素
  {transform: 'rotateZ(0deg) skewY(0deg) scale(1)'  , x:'-34%', y:'-34%'}, "<" );

custom_anime.to('.c', //アニメーションする要素
  {y:'-135%',}, "<2" );
  // custom_anime.to('.c', //アニメーションする要素
  // {y:'400px'}, ">" );
  // custom_anime.to('.c', //アニメーションする要素
  // {transform:'rotate(90deg)'}, ">" );
  // custom_anime.to('.ao3', //アニメーションする要素
  // {zIndex:'-999'}, ">" );

  custom_anime.to('.c', //アニメーションする要素
  {x:'68%'}, "<2" );
  custom_anime.to('.b', //アニメーションする要素
  {y:'-135%'}, "<" );

  //さらに動かす

  const custom_anime2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".sdgsEnd", //アニメーションが始まるトリガーとなる要素
      start: 'top top',
      end: 'top -500%', 
      scrub: 1,
    }
  });
  custom_anime2.to('.c', //アニメーションする要素
  {y:'-70%',
   x:'-225%',
   transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)',
   borderRadius:'0'});
  custom_anime2.to('.b', //アニメーションする要素
  {y:'-96%',
  x:'-181%',
  transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)',
  borderRadius:'0'},);
  custom_anime2.to('.a', //アニメーションする要素
  {y:'-120%',
  x:'-136%',
  transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)',
  borderRadius:'0'});



//All
  custom_anime2.to('.all', //アニメーションする要素
  {y:'250%',
  x:'-158%',transform:'rotateZ(-60deg) skewY(30deg) scale(2.6060, 1.4703)'},"<");


  //ブラックも落とす
    //ブラック
    custom_anime2.to('.cblack', //アニメーションする要素
    {y:'340%',
    x:'-225%',
    transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)'}, "<" );
    custom_anime2.to('.bblack', //アニメーションする要素
    {y:'310%',
    x:'-180.2%',
    transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)'}, "<" );
  
    custom_anime2.to('.ablack', //アニメーションする要素
    {y:'289%',
    x:'-136%'
    ,transform: 'rotateZ(-60deg) skewY(30deg) scale(0.3999, 0.4701)'}, "<" );
  
  //Allあげる
  custom_anime2.to('.all', //アニメーションする要素
  {y:'10%',
  opacity:1});


  //ブラックあげる
  custom_anime2.to('.ablack', //アニメーションする要素
  {y:'48.2%',opacity:1},"<");
  custom_anime2.to('.bblack', //アニメーションする要素
  {y:'74.4%',opacity:1},"<");
  custom_anime2.to('.cblack', //アニメーションする要素
  {y:'99.2%',opacity:1},"<");


  //写真落とす

  custom_anime2.to('.c', //アニメーションする要素
  {y:'65%',duration: 2.5, ease: "power1.out",}, "<1" );
  custom_anime2.to('.b', //アニメーションする要素
  {y:'39%',duration: 2.5, ease: "power1.out",}, "<-0.3" );
  custom_anime2.to('.a', //アニメーションする要素
  {y:'13%',duration: 2.5, ease: "power1.out",}, "<-0.2");

 //溶け込ます
 custom_anime2.to('.cblack', //アニメーションする要素
 {opacity:0},">");
 custom_anime2.to('.c', //アニメーションする要素
  {opacity:0}, "<1" );



  custom_anime2.to('.bblack', //アニメーションする要素
  {opacity:0},"<");

  custom_anime2.to('.b', //アニメーションする要素
  {opacity:0}, "<" );


  custom_anime2.to('.ablack', //アニメーションする要素
  {opacity:0},"<");
  custom_anime2.to('.a', //アニメーションする要素
  {opacity:0}, "<" );



  //ブラック消す


  //All起き上がらせる
  custom_anime2.to('.all', //アニメーションする要素
  {x:'-30%' , y:"-10%",transform:'rotateZ(0) skewY(0) scale(2.6060, 1.4703)',duration: 2.5, ease: "power1.out",}, "<1");

  //ラストロゴ
custom_anime2.to('.sdgsAP', //アニメーションする要素
{x:"-50%",y:"0"});
custom_anime2.to('.sdgsLogo', //アニメーションする要素
{x:"-100%",y:"25%"});
custom_anime2.to('.sdgsAP', //アニメーションする要素
{opacity:'1',duration: 2.5, ease: "power1.out",});
custom_anime2.to('.sdgsLogo', //アニメーションする要素
{opacity:'1',duration: 2.5, ease: "power1.out",},">");

custom_anime2.to('.sdgsAP', //アニメーションする要素
{scale:0.7, x:'30%',y:'100%',duration: 2.5, ease: "power1.out",},"<4");
custom_anime2.to('.sdgsLogo', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<-0.5");
custom_anime2.to('.all', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<");


custom_anime2.to('.sdgsAP', //アニメーションする要素
{scale:10, x:'30%',y:'100%',duration: 2.5, ease: "power1.out",});

custom_anime2.to('.color', //アニメーションする要素
{backgroundColor:'#7d2030',duration: 2.5, ease: "power1.out",},"<");
custom_anime2.to('.sdgsAP', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<");
custom_anime2.to('.sdgsLogo', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<");
custom_anime2.to('.all', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<");
custom_anime2.to('.navi', //アニメーションする要素
{opacity:0,duration: 2.5, ease: "power1.out",},"<");

gsap.to('.footerBokin',{ 
  opacity:1, 
  duration: 2.5, ease: "power1.out",
  scrollTrigger: {
    trigger: '.footer',//アニメーションが始まるトリガーとなる要素
    start: 'top 30%', //アニメーションが始まる位置を指定
    end: 'top top', 
    // markers: true,
    scrub: 0.3,
  }
});
gsap.to('.footerClowd',{ 
  opacity:1, 
  duration: 2.5, ease: "power1.out",
  scrollTrigger: {
    trigger: '.footer',//アニメーションが始まるトリガーとなる要素
    start: 'top 30%', //アニメーションが始まる位置を指定
    end: 'top top', 
    // markers: true,
    scrub: 0.3,
  }
});


//モーダル
//要素の取得

const modalOpen = document.getElementById('modal1');
const modalArea = document.getElementById('modalArea');

//サインアップのボタンを押した時の処理
modalOpen.addEventListener('click',(e)=>{
    modalArea.style.display = 'block';
});

//非表示の処理 Xボタンと黒色の部分

const modalBg = document.getElementById('modalBg');
const modalClose = document.getElementById('closeModal');
modalBg.addEventListener('click',()=>{
    modalArea.style.display = 'none';
});
modalClose.addEventListener('click',()=>{
    modalArea.style.display = 'none';
});


//チャート
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["絶滅危惧","対象外"],
    datasets: [{
        backgroundColor: [
            "#7d2030",
            "#333"
        ],
        data: [21,79]
    }]
  },
  
  // options: {
  //   title: {
  //     display: true,
  //     text: '血液型 割合'
  //   }
  // }
});

const modalOpen2 = document.getElementById('modal2');
const modalArea2 = document.getElementById('modalArea2');

//クリック
modalOpen2.addEventListener('click',(e)=>{
    modalArea2.style.display = 'block';
});

//非表示の処理 Xボタンと黒色の部分

const modalBg2 = document.getElementById('modalBg2');
const modalClose2 = document.getElementById('closeModal2');
modalBg2.addEventListener('click',()=>{
    modalArea2.style.display = 'none';
});
modalClose2.addEventListener('click',()=>{
    modalArea2.style.display = 'none';
});

var ctx2 = document.getElementById("myPieChart2");
var myPieChart2 = new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: ["絶滅危惧","対象外"],
    datasets: [{
        backgroundColor: [
            "#7d2030",
            "#333"
        ],
        data: [37,63]
    }]
  },
});


const modalOpen3 = document.getElementById('modal3');
const modalArea3 = document.getElementById('modalArea3');

//クリック
modalOpen3.addEventListener('click',(e)=>{
    console.log('OK');
    modalArea3.style.display = 'block';
});

//非表示の処理 Xボタンと黒色の部分

const modalBg3 = document.getElementById('modalBg3');
const modalClose3 = document.getElementById('closeModal3');
modalBg3.addEventListener('click',()=>{
    modalArea3.style.display = 'none';
});
modalClose3.addEventListener('click',()=>{
    modalArea3.style.display = 'none';
});

var ctx3 = document.getElementById("myPieChart3");
var myPieChart3 = new Chart(ctx3, {
  type: 'pie',
  data: {
    labels: ["絶滅危惧","対象外"],
    datasets: [{
        backgroundColor: [
            "#7d2030",
            "#333"
        ],
        data: [14,86]
    }]
  },
});


const modalOpen4 = document.getElementById('modal4');
const modalArea4 = document.getElementById('modalArea4');

//クリック
modalOpen4.addEventListener('click',(e)=>{
    console.log('OK');
    modalArea4.style.display = 'block';
});

//非表示の処理 Xボタンと黒色の部分

const modalBg4 = document.getElementById('modalBg4');
const modalClose4 = document.getElementById('closeModal4');
modalBg4.addEventListener('click',()=>{
    modalArea4.style.display = 'none';
});
modalClose4.addEventListener('click',()=>{
    modalArea4.style.display = 'none';
});

var ctx4 = document.getElementById("myPieChart4");
var myPieChart4 = new Chart(ctx4, {
  type: 'pie',
  data: {
    labels: ["絶滅危惧","対象外"],
    datasets: [{
        backgroundColor: [
            "#7d2030",
            "#333"
        ],
        data: [33,67]
    }]
  },
});

