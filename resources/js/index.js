import { gsap } from "gsap";


gsap.set('span', {
    opacity:0,
})

gsap.to('.acca1', {
    opacity:1,
    stagger:0.1,
    duration:1.5,
})