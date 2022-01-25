import * as React from 'react';
import ProTip from '../src/ProTip';
import Link from '../src/Link';
import Copyright from '../src/Copyright';
import Styles from '../styles/home.module.css';
import Image from 'next/image';
import Head from 'next/head'
import Button from '@mui/material/Button';
import { makeStyles } from '@mui/styles';
export default function Index() {



  return (

    <div className={Styles.Container} >

      <Head>
        <title>Home | ProxHub</title>
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        <meta name='description' content='A hub for all (still adding some) web-proxies to bypass  ' />

      </Head>
      <div className={Styles.tophalf} >

        <h1 className={Styles.title} >Prox-Hub</h1>
        <p className={Styles.creds}>made by illusions#1000 </p>
        <div className={Styles.ascrollbtns}>
          <Button className={Styles.btnGradProxies}
            onClick={() => {
              window.location.href = "/choices";
            }}
          > Proxies </Button>



        </div>


      </div>
      <Copyright />
    </div>

  );
}
