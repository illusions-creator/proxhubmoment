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
        <div className='Container'>
            <Head>
                <title>Choices | ProxHub</title>
                <meta name="viewport" content="initial-scale=1, width=device-width" />
                <meta name='description' content='Proxy lists from ProxHub' />
            </Head>
        </div>
    );
}