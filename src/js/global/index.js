import 'scroll-behavior-polyfill'
import Scroll from './Scroll'
import Header from './Header'
import Drawer from './Drawer'

/** Scroll */
const scroll = new Scroll()

/** Header */
const header = new Header()

/** Drawer */
const drawer = new Drawer({ scroll: scroll })
