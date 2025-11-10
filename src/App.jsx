import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import '@fontsource/roboto/300.css';
import '@fontsource/roboto/400.css';
import '@fontsource/roboto/500.css';
import '@fontsource/roboto/700.css';
import Button from '@mui/material/Button';
import Home  from '@mui/icons-material/Home';
import useMediaQuery from '@mui/material/useMediaQuery';
import { useColorScheme } from '@mui/material/styles';
import FormControl from '@mui/material/FormControl';
import FormControlLabel from '@mui/material/FormControlLabel';
import FormLabel from '@mui/material/FormLabel';
import RadioGroup from '@mui/material/RadioGroup';
import Radio from '@mui/material/Radio';



function App() {
  const prefersDarkMode = useMediaQuery('(prefers-color-scheme: dark)');
  const prefersLightMode = useMediaQuery('(prefers-color-scheme: light)');

  const {mode, setMode} = useColorScheme();
  console.log('mode', mode);
  
  if (typeof mode === 'undefined') return null

  function handleChange (event) {
    const changeMode =  event.target.value;
    setMode(changeMode);
  }

  console.log(`Log thằng dark, ${prefersDarkMode}`);
  console.log(`Log thằng light, ${prefersLightMode}`);

  return (
    <>
      <div>prefersDarkMode: {prefersDarkMode.toString()}</div>
      <div>prefersLightMode: {prefersLightMode.toString()}</div>
      <div>
        <a href="https://vite.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <Button variant="contained"><Home/> HIHI</Button>

        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
      <FormControl>
        <FormLabel id="demo-radio-buttons-group-label">Gender</FormLabel>
        <RadioGroup
          aria-labelledby="demo-radio-buttons-group-label"
          value={mode}
          name="radio-buttons-group"
          onChange={handleChange}
        >
          <FormControlLabel value="system" control={<Radio />} label="Hệ thống" />
          <FormControlLabel value="dark" control={<Radio />} label="Đen" />
          <FormControlLabel value="light" control={<Radio />} label="Sáng" />
        </RadioGroup>
      </FormControl>
    </>
  )
}

export default App
