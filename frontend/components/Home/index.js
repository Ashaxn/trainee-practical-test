import React, { Component } from 'react';
import { View, Text } from 'react-native';
import styles from './style';

export default class Home extends Component {
  constructor(props) {
    super(props);
    this.state = {
      id: '',
      name: '',
      username: '',
      email: '',
      password:''
    };
  }

  render() {
    return (
      <View  style={styles.view}>
        <Text style={styles.txt}> User Account Data</Text>
      </View>
    );
  }
}
