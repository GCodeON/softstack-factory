#!/usr/bin/env bash


if [ $1 = "--install" ]; then
    echo "Installing..."
    npm install
else
    echo "Watching..."
    npm run watch
fi
