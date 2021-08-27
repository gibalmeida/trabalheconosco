import React from 'react';

export default function ValidationError({ error }) {
    return (
        {error} && <div className="font-medium text-red-600 ml-1">{error}</div>
    );
}