import React, { useEffect, useRef } from "react";

export default function TextAreaForFloatingLabel({
    id,
    name,
    value,
    placeholder,
    className,
    autoComplete,
    required,
    isFocused,
    handleChange,
}) {
    const input = useRef();

    useEffect(() => {
        if (isFocused) {
            input.current.focus();
        }
    }, []);

    return (
        <textarea
            id={id}
            name={name}
            value={value}
            className={
                `peer block w-full h-24 pt-4 ` +
                (className ? className : '')
            }
            ref={input}
            autoComplete={autoComplete}
            placeholder={placeholder}
            required={required}
            onChange={(e) => handleChange(e)}
        />
    );
}

