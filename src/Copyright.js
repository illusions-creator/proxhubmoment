import * as React from 'react';
import Typography from '@mui/material/Typography';
import MuiLink from '@mui/material/Link';
import Styles from '../styles/copyright.module.css';
export default function Copyright() {
  return (
    <Typography variant="body2" color="text.secondary" align="center" className={Styles.ligma}>
      {'Copyright © '}
      <MuiLink color="inherit" href="https://illusionss.cf">
        illusions#1000
      </MuiLink>{' '}
      {new Date().getFullYear()}.
    </Typography>
  );
}
