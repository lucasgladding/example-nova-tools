import LoremIpsum from './pages/LoremIpsum'
import DolorSit from './pages/DolorSit'

Nova.booting((app, store) => {
  Nova.inertia('LoremIpsum', LoremIpsum)
  Nova.inertia('DolorSit', DolorSit)
})
