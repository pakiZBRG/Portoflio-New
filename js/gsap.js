const controller = new ScrollMagic.Controller();

//FIRST SCROLL
const tlFirstScroll = new TimelineMax();
tlFirstScroll
   .to('.section-1__overlay', 4, {opacity: 0, zIndex: 0})
   .to('#name1', 1.5, {y: '70px', opacity: 0}, '-=2.5')

const scene1 = new ScrollMagic.Scene({
   triggerElement: '#trigger1',
   triggerHook: 0,
   duration: '100%'
})
   .setTween(tlFirstScroll)
   .addTo(controller)
   .setPin('#trigger1');


//SECOND SCROLL
const tlSecondScroll = new TimelineMax();
tlSecondScroll
   .to('.section-2__overlay', 4, {height: 0})
   .to('#name2', 1.5, {opacity: 0, display: 'none'}, '-=3')
   
const scene2 = new ScrollMagic.Scene({
   triggerElement: '#trigger2',
   triggerHook: 0,
   duration: '100%'
})
   .setTween(tlSecondScroll)
   .addTo(controller)
   .setPin('#trigger2');

//THIRD SCROLL
const tlThirdScroll = new TimelineMax();
tlThirdScroll
   .to('.section-3__overlay', 4, {height: 0})
   .to('#name3', 1.5, {opacity: 0, display: 'none'}, '-=3')
   .to('#up3', 1.5, {y: '-100px', opacity: 0}, '-=2')

const scene3 = new ScrollMagic.Scene({
   triggerElement: "#trigger3",
   triggerHook: 0,
   duration: '100%'
})
   .setTween(tlThirdScroll)
   .addTo(controller)
   .setPin('#trigger3');