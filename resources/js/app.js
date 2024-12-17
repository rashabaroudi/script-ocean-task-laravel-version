import './bootstrap';
import { animate } from "https://cdn.jsdelivr.net/npm/framer-motion@11.11.11/dom/+esm";

animate(".box", { scale: [0.4, 1] }, { ease: "circInOut", duration: 1 });
